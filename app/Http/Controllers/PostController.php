<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Post;
Use App\Category;
Use App\Tag;


class PostController extends Controller
{

    public function index()
    {
        return view('front.index',[
            'categories' => Post::first()->paginate(10),
        ]);
    }

    public function create()
    {
        return view('admin.posts.create', [
            'post' => new Post(),
            'categories' => Category::get(),
            'tags' => Tag::get(), 
        ]);
    }

    public function store(Request $request)
    {

        $attr = $request->validate([
            'title' => 'required|min:3',
            'body' => 'required',
            'category' => 'required',
            'tags' => 'array|required',
        ]);

        // if($val)

        $slug = \Str::slug($request->title);
        $attr['slug'] = $slug;

        
        if ($request->file('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            // $thumbnailUrl = $thumbnail->storeAs("images/posts", "{$slug}.{$thumbnail->extension()}");
            $thumbnailUrl = $thumbnail->store("public/images/posts");
        } else {
            $thumbnailUrl = NULL;
        }
        
        // $thumbnail = request()->file('thumbnail');
        // $thumbnailUrl = $thumbnail->storeAs("images/posts", "{$slug}.{$thumbnail->extension()}");
        // $thumbnailUrl = $thumbnail->store("images/posts");
        
        $attr['category_id'] = request('category');
        $attr['thumbnail'] = $thumbnailUrl;
        // dd($attr);
        
        // $attr['user_id'] = auth()->id();

        // $post = Post::create($attr);
        $post = auth()->user()->posts()->create($attr);

        $post->tags()->attach(request('tags')); 

        // session()->flash('error', 'the post was not created');
        session()->flash('success', 'The post was created');


        return back();
        // return redirect()->to('posts');
    }

    public function destroy(Post $post)
    {
        # code...
    }
}
