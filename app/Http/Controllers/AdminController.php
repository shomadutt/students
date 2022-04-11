<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Student;


class AdminController extends Controller
{
    public function displayAll()
    {
        $data = Student::all();

        print "<pre>";
        error_log(print_r($data));
        print "<pre>";


        return view('home', compact('data'));
    }
}
