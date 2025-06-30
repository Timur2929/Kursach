<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show(Product $product)
{
    $relatedProducts = Product::where('category_id', $product->category_id)
        ->where('id', '!=', $product->id)
        ->withCount(['reviews' => function($query) {
            $query->select(DB::raw('count(*)'));
        }])
        ->inRandomOrder()
        ->limit(4)
        ->get();

    // Eager load reviews with user information
    $product->load(['reviews.user']);

    return view('products.show', [
        'product' => $product,
        'relatedProducts' => $relatedProducts
    ]);
}
    public function index()
    {
        //
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
        'description' => 'required|string',
        'prix' => 'required|numeric',
        'category_id' => 'required|exists:categories,id',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $imagePath = $request->file('image')->store('products', 'public');

    $product = Product::create([
        'nom' => $validated['nom'],
        'description' => $validated['description'],
        'prix' => $validated['prix'],
        'category_id' => $validated['category_id'],
        'image' => $imagePath,
    ]);

    return redirect()->route('admin.products.index');
}

    /**
     * Display the specified resource.
     */
    

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
