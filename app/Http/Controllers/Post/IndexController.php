<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $categoryId = $request->input('category');
        $categories = Category::all();
        $posts =
            ($categoryId)
            ? Category::findOrFail($categoryId)->posts()->orderBy('likes', 'desc')->get()
            : Post::orderBy('likes', 'desc')->get();
        return view('posts.index', compact(['posts', 'categories']));
    }
}
