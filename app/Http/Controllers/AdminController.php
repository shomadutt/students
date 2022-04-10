<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Student;

class AdminController extends Controller
{
    public function displayAll()
    {
        $data = Student::all();
        return view('admin', compact('data'));


        // print "<pre>";
        // error_log(print_r($data));
        // print "<pre>";


        // foreach ($studentData as $student) {
        //     foreach ($student as $stud) {
        //         error_log(print_r($stud->name));
        //         error_log(print_r($stud->email_address));
        //     }
        // }


    }
}
