<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $categories = \App\Models\Category::withCount('products')
        ->get();
        

    return view('welcome', compact('categories'));
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
    // Временный вывод для отладки
    if($request->hasFile('image')) {
    $file = $request->file('image');
    dd([
        'file_exists' => $file->exists(),
        'is_valid' => $file->isValid(),
        'extension' => $file->extension(),
        'path' => $file->path(),
        'size' => $file->getSize(),
    ]);
    }

        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $imagePath = $request->file('image')->store('categories', 'public');
    
        $category = Category::create([
            'nom' => $validated['nom'],
            'image' => $imagePath,
        ]);
    
        return redirect()->route('admin.categories.index');
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
}
