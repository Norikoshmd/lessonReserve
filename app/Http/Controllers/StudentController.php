<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    private $student;

    public function __construct(Student $student)
    {
       $this->student = $student;
    }

    public function s_index()
    {
        return view('student.index');
    }
}