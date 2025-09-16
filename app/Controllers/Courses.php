<?php 

namespace App\Controllers;

use App\Models\Course;
use App\Models\Students;
use App\Models\Takes;

class Courses extends BaseController{
    public function enroll(){
        $courseModel = new Course();
        $dataCourse['courses'] = $courseModel->findAll();

        $data = [
            'title' => 'Home',
            'content' => view('enroll_course', $dataCourse)
        ];

        return view('template', $data);
    }

    public function enrollProcess($course_id){
        $takesModel = new Takes();
        $courseModel = new Course();
        $studentModel = new Students();

        $user_id = session()->get('user_id');
        $student = $studentModel->where('user_id', $user_id)->first();

        $student_id = $student['student_id'];
        
        $course = $courseModel->find($course_id);
        $already = $takesModel->where('student_id', $student_id)
                            ->where('course_id', $course_id)
                            ->first();
        
        if($already){
            return redirect()->to('student/enroll')->with('error', 'Kamu sudah enroll course: '. $course['course_name']);
        }

        $takesModel->insert([
            'student_id'=> $student_id,
            'course_id' => $course_id,
            'enroll_date' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to(base_url('student/enroll'))->with('success', 'Berhasil enroll ke course: ' . $course['course_name']);
    }
}

?>