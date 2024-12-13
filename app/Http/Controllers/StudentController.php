<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = User::where('role', 'user')->get();
        return view('Dashboard.Students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.Students.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       /* User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => 'user',
            'password' => Hash::make($request->phone),
        ]);*/

        $student=New User();
        $student->name =$request->name;
        $student->email =$request->email;
        $student->phone =$request->phone;
        $student->password = Hash::make($request->phone);
        $student->save();



        return redirect()->route('students.index')->with('success', 'Student added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student=User::find($id);
        return view('Dashboard.Students.edit',compact('student'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        User::where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => 'user',
            'password' => Hash::make($request->phone),
        ]);
        return redirect()->route('students.index')->with('success', 'Student updeted successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student=User::find($id);
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully');

    }
}
