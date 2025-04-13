<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCreateRequest;
use App\Http\Services\CategoryService;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService) {
        $this->categoryService = $categoryService;
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = $this->categoryService->getAllCategories();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductCreateRequest $request)
    {

        $this->categoryService->create($request);


        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $category = $this->categoryService->find($id);



        return view('categories.show',compact('category'));
        // dd($category);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $category = $this->categoryService->find($id);

        return view('categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductCreateRequest $request, string $id)
    {
        $this->categoryService->update($request,$id);
        return redirect()->route('categories.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->categoryService->delete($id);
        return redirect()->route('categories.index');
    }

    public function search(Request $request)
    {
        $query = $request->input('search');
        $categories = Category::where('name', 'LIKE', "%{$query}%")->get();
        return view('categories.index', compact('categories'));
    }
}
