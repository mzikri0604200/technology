<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{

    public function index()
    {
        return view('admin.tags.index', [
            'tags' => Tag::first()->paginate(10),
        ]);
    }

    public function create()
    {
        return view('admin.tags.create',[
            'tag' => new Tag(),
        ]);
    }

    public function store(Request $request)
    {

        $attr = $request->validate([
            'name' => 'required|min:3',
        ]);

        $attr['slug'] = \Str::slug($request->name);

        $category = Tag::create($attr);
        session()->flash('success', 'The Tag was created');
        // return redirect()->to('admin/categories/index');

        return redirect('/tags');
    }

    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }

    public function update(Tag $tag, Request $request)
    {
       $attr = $request->validate([
           'name' => 'required|min:3'
       ]);

    //    $attr['slug'] = \Str::slug($request->name);

       $tag->update($attr);

        session()->flash('success', 'The Tag was updated');

        return redirect('/tags');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        session()->flash('error', 'The category was deleted');
        
        return redirect('/tags');
    }
}
