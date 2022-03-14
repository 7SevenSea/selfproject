<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('category.category',compact('categories'));
    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('category.edit',compact('category'));
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('category.index');
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(CategoryRequest $request)
    {
        $category = new Category;
        $category->order = $request->order;
        $category->name = $request->name;
        $category->save();

        $validated = $request->validated();
        return redirect()->route('category.index');
    }

    public function update(CategoryRequest $request,$id)
    {
        $category = Category::find($id);
        $category->order = $request->order;
        $category->name = $request->name;
        $category->save();

        $validated = $request->validated();
        return redirect()->route('category.index');
    }

}
