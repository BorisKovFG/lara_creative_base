<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    /**
     * @param FilterRequest $request
     * @return Application|Factory|View
     */
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
//        $categoryId = $request->input('category');
        $categories = Category::all();
//        $posts =
//            ($categoryId)
//            ? Category::findOrFail($categoryId)->posts()->orderBy('likes', 'desc')->paginate(5)->withQueryString()
//            : Post::orderBy('likes', 'desc')->paginate(10);
//        $query = Post::query();
//        $posts = $query->get();

        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $posts = Post::filter($filter)
            ->orderBy('likes', 'DESC')
            ->paginate(10)
            ->withQueryString();
        return view('posts.index', compact(['posts', 'categories'])); //, 'categoryId'
    }
}
