<?php

namespace App\Controllers;

use App\Models\Students;
use App\Models\Takes;
use App\Models\User;

class Home extends BaseController
{
    public function student()
    {
        $session = session();
        $user_id = $session->get("user_id");

        $userModel = new User();
        $studentModel = new Students();

        $student = $studentModel->where('user_id', $user_id)->first();
        $student_id = $student['student_id'];

        $takesModel = new Takes();
        $dataCourse['courses'] = $takesModel->get_course_by_student($student_id);

        $data = [
            'title' => 'Home',
            'content' => view('student_home', $dataCourse)
        ];

        return view('template', $data);

        
    }
}
