<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $student;

    public function __construct(Student $student)
    {
       $this->student = $student;
    }
}
