<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function index(){
        return view('posts',
        [
           'posts' => Post::latest()->filter(request(['search','category','author']))->paginate(6)->withQueryString(),
           'categories'=>Category::all(),
            'currentCategory' => Category::firstWhere('slug',request('category'))

        ]);
    }
    public function show (Post $post)
    {
        return view('post',
        [
           'post' =>$post

        ]);
    }

}

