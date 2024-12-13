<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainers=Trainer::all();
        return view('Dashboard.Teacher.index', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.Teacher.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Trainer::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'magor'=> $request->magor,
            'password' => Hash::make($request->phone),
        ]);
        return redirect()->route('trainers.index')->with('success', 'Student updeted successfully');

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
        $trainer=Trainer::find($id);
        return view('Dashboard.Teacher.edit',compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Trainer::where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'magor'=> $request->magor,
            'password' => Hash::make($request->phone),
        ]);
        return redirect()->route('trainers.index')->with('success', 'Student updeted successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $trainer=Trainer::find($id);
        $trainer->delete();
        return redirect()->route('trainers.index')->with('success', 'Student deleted successfully');
    }
}
