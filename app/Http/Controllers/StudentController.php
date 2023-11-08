<?php

namespace App\Http\Controllers;


use App\Models\student;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StorestudentRequest;
use App\Http\Requests\UpdatestudentRequest;
use toastr;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $students = student::all();
    
        return view('index',compact('students')); 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  

    public function create()
{
    $students = Student::all(); // Assuming 'Student' is your Eloquent model for students

    return view('create', [
        'students' => $students, // Pass the 'students' variable to the view
    ]);
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorestudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {



        student::create([
            'Customer_id' => $request->Customer_id,
            'Name' => $request->Name,
            'address' => $request->address,
            'area' => $request->area,
            'number' => $request->number,
            'o_number' => $request->o_number,
            'due' => $request->due,
            'limiit' => $request->limiit,
          
        ]);
    
        return back()->with('success', 'Data Create successfully');
       
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        //
    }


    public function editStore(request $request)

    {
        

       $student = student::find($request->student_id);
        $student->Customer_id = $request->Customer_id;
        $student->Name = $request->Name;
        $student->address = $request->address;
       
        $student->save();
        return Redirect::to('create')->with('success', 'Update successfully');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatestudentRequest  $request
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update($student_id)
    {
        $student = student::find($student_id);
        return view('edit',compact('student'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $student = student::find($request->student_id);
        $student->delete();
        return back()->with('success', 'delete successfully');
    }
 
}
