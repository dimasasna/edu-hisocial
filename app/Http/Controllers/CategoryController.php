<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.category.index", [
            "title" => "Dashboard | Category",
            'logo' => '../assets/img/logo-hisocial.png',
            "categories" => Category::all()
        ]);
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
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        Category::create($validatedData);


        return redirect('/dashboard/category')->with('success', 'Success Add Category');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        $category = Category::where('id', $category->id)->first();

        if ($category) {
            $category->update($validatedData);
            return redirect('/dashboard/category')->with('success', 'Success Update Category');
        } else {
            return redirect('/dashboard/category')->with('success', 'Failed Update Category');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/dashboard/category')->with('success', 'Success Delete Category');
    }
}
