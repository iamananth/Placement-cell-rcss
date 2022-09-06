<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
        $student = Student::all();
        return view ('students.index')->with('students', $student);
        }
        else{
            return view('auth.login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
            return view('students.create');
        }
        else{
            return view('auth.login');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $input = $request->all();
        Student::create($input);
        return redirect('student')->with('flash_message', 'Student Addedd!'); 
        }
        else{
            return view('auth.login');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::check()) {
            $student = Student::find($id);
            return view('students.show')->with('students', $student);
        }
        else{
            return view('auth.login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::check()) {
            $student = Student::find($id);
            return view('students.edit')->with('students', $student);
        }
        else{
            return view('auth.login');
        }

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
        if (Auth::check()) {
            $student = Student::find($id);
            $input = $request->all();
            $student->update($input);
            return redirect('student')->with('flash_message', 'student Updated!'); 
        }
        else{
            return view('auth.login');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::check()) {
            Student::destroy($id);
            return redirect('student')->with('flash_message', 'Student deleted!');  
        }
        else{
            return view('auth.login');
        }

    }
}
