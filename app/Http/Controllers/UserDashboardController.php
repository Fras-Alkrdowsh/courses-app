<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Models\Catigory;
use App\Models\Lesson;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
        public function index(){
            // Show the user dashboard view
            $catigory=Catigory::all();
            return view('dashboard',compact('catigory'));
        }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $catigory=Catigory::with('trainer')->find($id);
        $lessons=Lesson::where('catigory_id',$id)->get();
        return view('show_course',compact('catigory'),compact('lessons'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function show_qustions(){
        return view('show_qu');

    }
}
