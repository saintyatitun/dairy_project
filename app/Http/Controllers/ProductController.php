<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    //
    function index(){

        $products = Product::with('category')->get();
       
        return view('admin.index', [
            'products' => $products
        ]);
    }

    function create() {

        $categories = Category::all();
        return view('admin.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            // Add more validation rules as needed
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->input('category');
     
        // Add more fields as needed

        $product->save();

        return redirect()->route('admin.create')->with('success', 'Product created successfully!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products')->with('success', 'Product deleted successfully!');
    }


    public function edit(Product $product){
        $categories = Category::all();
       return view('admin.edit', [
         'product' => $product,
         'categories'=> $categories,
       ]);
    }
    
    public function update(Request $request, $id)
    {
      
        $product = Product::findOrFail($id); // Fetch the product

    // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'category' => 'required|exists:categories,id', // Assuming you have a 'categories' table with an 'id' column
            // Add more validation rules as needed
        ]);

    // Update the product with validated data
        $product->update([
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
            'description' => $validatedData['description'],
            'category_id' => $validatedData['category'],
            // Add more fields as needed
        ]);

      
        return redirect()->route('admin.products')->with('success', 'Product updated successfully!');

    }
}

