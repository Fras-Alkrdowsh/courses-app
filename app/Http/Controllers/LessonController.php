<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Catigory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lessons=Lesson::with('catigory')->get();
        return view('Dashboard.Lessons.index',compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $catigories=Catigory::all();
        return view('Dashboard.Lessons.add',compact('catigories'));
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'catigory_id' => 'required|exists:catigories,id', // Ensure this references the correct table
        ]);
    
        $filePath = null; // Initialize filePath
    
        // Handle the uploaded file
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            // Store the file in the public disk
            $filePath = $file->storeAs('uploads', $fileName, 'public');
        }
    
        // Create the Lesson record with the image path
        $lesson = Lesson::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $filePath ? 'uploads/' . $fileName : null, // Store the relative path if an image was uploaded
            'catigory_id' => $request->catigory_id,
        ]);
    
        return redirect()->route('lessons.index')->with('success', 'Lesson created successfully');
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
          $lesson=Lesson::find($id);
        $catigories=Catigory::all();
        return view('Dashboard.Lessons.edit',compact('catigories'),compact('lesson'));
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image is optional in update
            'catigory_id' => 'required|exists:catigories,id',
        ]);
    
        // Find the existing lesson
        $lesson = Lesson::find($id);
    
        // Handle the uploaded file
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($lesson->image) {
                Storage::disk('public')->delete($lesson->image);
            }
    
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            // Store the new file in the public disk
            $filePath = $file->storeAs('uploads', $fileName, 'public');
    
            // Update the image path
            $lesson->image = 'uploads/' . $fileName;
        }
    
        // Update the lesson's attributes
        $lesson->name = $request->name;
        $lesson->description = $request->description;
        $lesson->catigory_id = $request->catigory_id;
    
        // Save the updated lesson
        $lesson->save();
    
        return redirect()->route('lessons.index')->with('success', 'Lesson updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    
        $category = Lesson::findOrFail($id);

        // Delete the associated image if it exists
        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }
    
        // Delete the category from the database
        $category->delete();
        return redirect()->route('lessons.index')->with('success', 'Student deleted successfully');

    }
}
