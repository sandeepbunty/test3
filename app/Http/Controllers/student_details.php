<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\student;

class student_details extends Controller
{
	public function store(Request $request)
	{
		return view('about');
		return view('student',var_dump($request));

		$student = new student;        
        $student->email_id = request('email_id');
        $student->password = request('password');
        $student->save();
		// return view('student',var_dump($data));

	}
}
