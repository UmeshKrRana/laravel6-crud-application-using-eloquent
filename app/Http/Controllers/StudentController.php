<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Display data
        $students       =       Student::all();

        // passing data into view
        return view('student/index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $request->validate([
            'first_name'        =>          'required',
            'last_name'         =>          'required',
            'gender'            =>          'required',
            'dob'               =>          'required',
            'email'             =>          'required|email',
            'phone'             =>          'required',
            'address'           =>          'required',
            'zipcode'           =>          'required',
        ]);

        $input                   =           $request->all();
        $input['full_name']      =           $input['first_name'] . " ".$input['last_name'];
        $student                 =           Student::create($input);
        return back()->with('success', 'Record created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student    =       Student::find($id);
        return view('student/show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student    =       Student::find($id);
        return view('student/update', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
   {
     $student     =    $request->validate([
         'first_name'        =>          'required',
         'last_name'         =>          'required',
         'gender'            =>          'required',
         'dob'               =>          'required',
         'email'             =>          'required|email',
         'phone'             =>          'required',
         'address'           =>          'required',
         'zipcode'           =>          'required',
     ]);

     $student['full_name']      =           $student['first_name'] . " ".$student['last_name'];

     Student::where('id', $id)->update($student);

     return back()->with('success', 'Record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect('student')->with('success', 'Student deleted successfully');
    }
}
