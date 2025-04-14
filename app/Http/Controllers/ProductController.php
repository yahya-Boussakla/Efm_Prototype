<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCreateRequest;
use App\Http\Services\CategoryService;
use App\Http\Services\ProductService;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     protected $productService;

     public function __construct(ProductService $productService)
     {
        $this->productService = $productService;
     }


    public function index()
    {
        $products = $this->productService->getAllProducts();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->productService->getAllCategories();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductCreateRequest $request)
    {
        
        $this->productService->create($request);
        
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }

    public function search(Request $request)
{
    $request->validate([
        'query' => 'required|min:2'
    ]);
    
    $query = $request->input('query');
    $products = Product::where('name', 'LIKE', "%{$query}%")->get();
    return view('products.index', compact('products'));
}
}
