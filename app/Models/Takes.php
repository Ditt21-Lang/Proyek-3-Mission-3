<?php 

namespace App\Models;

use CodeIgniter\Model;

class Takes extends Model{
    protected $table = "takes";
    protected $allowedFields = ['student_id', 'course_id', 'enroll_date'];

    public function get_course_by_user($user_id){
        return $this->select('courses.course_id, courses.course_name, courses.credits, takes.enroll_date' )
        ->join('courses', 'courses.course_id = takes.course_id')
        ->where('takes.student_id', $user_id)
        ->findAll();
    }

    public function get_course_by_student($student_id){
        return $this->select('courses.*')
        ->join('courses', 'courses.course_id = takes.course_id')
        ->where('takes.student_id', $student_id)
        ->findAll();
   }
}
?>