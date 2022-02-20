<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
   
    public function create()
    {
        //
		return view('student.create');
    }   
   
    public function store(Request $request)
    {
        //print_r($request);die();
		//echo $request->input('name');
		//echo $request->input('email');
		//echo $request->input('course');
		//echo $request->input('section');
		$obj=new Student();
		
		//above comment method store image in storage folder
        //$photo_path = $request->file('image')->store('public/studentphoto');
        //$obj->photo = $photo_path; 
		
		
		//rigth way to store image in public folder from where retrieve eaisly.
		if($request->hasFile('image')){
        $image = $request->file('image');
        $image_name = $image->getClientOriginalName();
        $image->move(public_path('/studentphoto'),$image_name);
        $image_path = "/studentphoto/" . $image_name;
		$obj->photo = $image_name;  
        }
		
		
		
		
		
        //$obj->photo = $photo_path;        
		
		$obj->name=$request->input('name');
		$obj->email=$request->input('email');
		$obj->course=$request->input('course');
		$obj->section=$request->input('section');
		if($obj->save())
		{
			//echo 'Data Save';
			//return redirect()->back()->with('status','Student Added Successfully');
			return redirect('student')->with('status','Student Data Deleted Successfully'); 
		}		
    }
    public function index()
    {
        //name,email,course,section
		$data=Student::all();
		//print_r($data);
		//debug $data;
		return view('student.index', compact('data'));
		
    }
    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
		//echo $id;
         $data=Student::find($id);
		 //print_r($data);
		 return view('student.edit',compact('data'));
    }

  
    public function update(Request $request)
    {
        //
		//echo $request->input('id');
		//echo $request->input('name');		
		//echo $request->input('email');
		//echo $request->input('course');
		//echo $request->input('section');
		$student = Student::find($request->input('id'));
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->course = $request->input('course');
        $student->section = $request->input('section');
        $student->update();
        //return redirect()->back()->with('status','Student Updated Successfully'); 
		return redirect('student')->with('status','Student Data Updated Successfully'); 
    }

    
    public function delete($id)
    {
		//echo 'abcd';
        echo $id;
		$student=Student::find($id);
		$student->delete();
		//return $student; 
		return redirect('student')->with('status','Student Data Deleted Successfully'); 
    }
}
