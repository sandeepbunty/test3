<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\home;

class usercontroller extends Controller
{
    public  function create()
    {
    	return view('create');
    }
    public  function store(Request $request)
    {
    	$data=home::all();
    	// User::create($request->all());
    	// return $request->all();
    }
}
