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
}
