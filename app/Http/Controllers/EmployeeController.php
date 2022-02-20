<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
		echo 'abcd';
		 $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $city_name = $request->input('city_name');
       // return view('index');
    }
	
}
