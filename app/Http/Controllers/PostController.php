<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Label;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function home(Request $request){
        if($request->has('search')){
            $search = $request->get('search');
            $post = Post::where('judul', 'like', "%$search%")->paginate(9)->appends($request->query());
            return view('blog.home', [
                'posts' => $post,
                'search' => $search
            ]);
        }
        else{
            $post = Post::paginate(9);
            return view('blog.home', [
                'posts' => $post
            ]);
        }
    }

    function category($slug){
        $category = Category::where('slug', $slug)->first()->nama;
        $post = Category::where('slug', $slug)->first()->posts()->paginate(9);
        return view('blog.home', [
            'posts' => $post,
            'category' => $category
        ]);
    }

    function label($slug){
        $label = Label::where('slug', $slug)->first()->nama;
        $post = Label::where('slug', $slug)->first()->posts()->paginate(9);
        return view('blog.home', [
            'posts' => $post,
            'label' => $label
        ]);
    }
}
