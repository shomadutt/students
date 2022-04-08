<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Student;


class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function displayAll()
    {
        $data = Student::all();


        print "<pre>";
        error_log(print_r($data));
        print "<pre>";


        // foreach ($studentData as $student) {
        //     foreach ($student as $stud) {
        //         error_log(print_r($stud->name));
        //         error_log(print_r($stud->email_address));
        //     }
        // }

        //return view('dashboard', compact('data'));
    }
}
