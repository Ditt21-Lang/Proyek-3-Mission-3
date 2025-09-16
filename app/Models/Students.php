<?php

namespace App\Models;

use CodeIgniter\Model;

class Students extends Model
{
    protected $table = "students";
    protected $primaryKey = "student_id";
    protected $allowedFields = ['entry_year', 'user_id'];
}

?>