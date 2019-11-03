<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();

        return view('welcome', compact('students'));
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        // return $request->all(); 
        $validatedData = $request->validate([
            'frist_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required'
        ]);
        // return $request->all(); 

        // $this-> validate($request, [
        //     'frist_name' => 'required',
        //     'last_name' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'password' => 'required'
        // ]);


        $student = new Student;
        $student->frist_name =$request->frist_name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->password = $request->password;
        $student->save();
        return redirect(route('home'))->with('successMeg', 'Student Success Added');
    
}
public function edit($id){
    $student = Student::find($id);
    return view('edit', compact('student'));
}
public function update(Request $request, $id){
    $validatedData = $request->validate([
        'frist_name' => 'required',
        'last_name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'password' => 'required'
    ]);

    $student =Student::find($id);
    $student->frist_name =$request->frist_name;
    $student->last_name = $request->last_name;
    $student->email = $request->email;
    $student->phone = $request->phone;
    $student->password = $request->password;
    $student->save();
    return redirect(route('home'))->with('successMeg', 'Data update Successcfuly');

}
public function delete($id){
    return $id;
}
}
