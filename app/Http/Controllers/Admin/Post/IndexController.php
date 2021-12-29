<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * @param FilterRequest $request
     * @return Application|Factory|View
     */
    public function __invoke(FilterRequest $request)
    {
        {
            $data = $request->validated();
            $categories = Category::all();
            $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
            $posts = Post::filter($filter)
                ->orderBy('likes', 'DESC')
                ->paginate(10)
                ->withQueryString();
            return view('admin.post.index', compact(['posts', 'categories']));
        }
    }
}
