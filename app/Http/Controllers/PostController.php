<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Label;
use App\Models\LabelPost;
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
    function add(Request $request){
        $attr = $request->all();
        $attr['judul']=request('txtjudul');
        $attr['isi']=request('body');
        $attr['status_aktif']="1";
        $attr['slug']=\Str::slug(request('txtjudul'));
        $attr['row_id_kategori']=request('categoriselect');
        $post=Post::create($attr);
        $baru= $post->id;
        foreach($request->tags as $item)
        { 
            $labelpost = new LabelPost();
            $labelpost->row_id_label=$item;
            $labelpost->row_id_post=$baru;
            $result=$labelpost->save();
        }
        $blogactive=Post::where('status_aktif','=','1')->get();
        $category=category::all();
        return view('admin.blog.add',[
            "category"=>Category::get(),
            "label"=>Label::get()
        ]);
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
