<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function index()
    {
        // dd(! Gate::allows('admin'));
        // $this->authorize('admin');
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString(),
            'category' => Category::all(),
            'currentCategory' => Category::firstWhere('slug', request('category'))

        ]);
    }
    public function update(Request $request,Post $post)
    {
        // Update the post...
        return view('posts.index', [

            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString(),
            'category' => Category::all(),
            'currentCategory' => Category::firstWhere('slug', request('category'))

        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }
}
