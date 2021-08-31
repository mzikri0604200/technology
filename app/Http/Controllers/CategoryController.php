<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller

{

    public function index()
    {
        return view('admin.categories.index',[
            'categories' => Category::first()->paginate(10),
        ]);
    }

    public function create()
    {
        return view('admin.categories.create',[
            'category' => new Category(), 
        ]);

        // return view('admin.categories.create')
    }

    public function show(Category $category)
    {
        // dd($category->load('posts.tags'));
        $category = Category::with('posts')->get();

        return view('categories.show', compact('category'));
    }

    public function store(Request $request)
    {
        $attr = $request->validate([
            'name' => 'required|min:3',
        ]);

        $attr['slug'] = \Str::slug($request->name);

        $category = Category::create($attr);
        session()->flash('success', 'The Category was created');
        // return redirect()->to('admin/categories/index');

        return redirect('/category');
        // return view('admin.categories.index', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Category $category, Request $request)
    {
        $attr = $request->validate([
            'name' => 'required|min:3',
        ]);

        $category->update($attr);

        session()->flash('success', 'The category was updated');

        return redirect('/category');
    }

    public function destroy(Category $category)
    {
       $category->delete();

        // Alert
        session()->flash('error', 'The category was deleted');
        
        return redirect('/category');
    }
}
