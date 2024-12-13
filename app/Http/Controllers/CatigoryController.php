<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Models\Catigory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class CatigoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catigories=Catigory::with('trainer')->get();
        return view('Dashboard.Courses.index',compact('catigories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trainers=Trainer::all();
        return view('Dashboard.Courses.add',compact('trainers'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'duration' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'trainer_id' => 'required|exists:trainers,id',
    ]);

    // Handle the uploaded file
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $fileName = time() . '_' . $file->getClientOriginalName();

        // Store the file in the public disk
        $filePath = $file->storeAs('uploads', $fileName, 'public');
    }

    // Create the category with the image path
    $category = Catigory::create([
        'name' => $request->name,
        'description' => $request->description,
        'duration' => $request->duration,
        'image' => 'uploads/' . $fileName, // Store the relative path
        'trainer_id' => $request->trainer_id,
    ]);

    return redirect()->route('courses.index')->with('success', 'Category created successfully');
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
        $catigory=Catigory::find($id);
        $trainers=Trainer::all();
        return view('Dashboard.Courses.edit',compact('trainers'),compact('catigory'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'duration' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image is optional
            'trainer_id' => 'required|exists:trainers,id',
        ]);
    
        // Find the category by ID
        $category = Catigory::findOrFail($id);
    
        // Handle the uploaded file
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($category->image) {
                Storage::disk('public')->delete($category->image);
            }
    
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            // Store the new file in the public disk
            $filePath = $file->storeAs('uploads', $fileName, 'public');
    
            // Update the image path
            $category->image = 'uploads/' . $fileName;
        }
    
        // Update the category's attributes
        $category->name = $request->name;
        $category->description = $request->description;
        $category->duration = $request->duration;
        $category->trainer_id = $request->trainer_id;
    
        // Save the updated category
        $category->save();
    
        return redirect()->route('courses.index')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Catigory::findOrFail($id);

    // Delete the associated image if it exists
    if ($category->image) {
        Storage::disk('public')->delete($category->image);
    }

    // Delete the category from the database
    $category->delete();

    return redirect()->route('courses.index')->with('success', 'Category deleted successfully');

    }

   /* public function display_item(){
        $catigories=Catigory::with('trainer')->get();
        return view('dashboard',compact('catigories'));
    }*/
}
