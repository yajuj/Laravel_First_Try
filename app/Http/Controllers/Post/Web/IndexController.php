<?php

namespace App\Http\Controllers\Post\Web;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;

class IndexController extends Controller
{
  /**
   * Provision a new web server.
   *
   * @return \Illuminate\Http\Response
   */
  public function __invoke(FilterRequest $request)
  {
    $data = $request->validated();
    $data['author'] = auth()->user()->id;

    $filter = app()->make(PostFilter::class, ['queryParams' => $data]);

    $posts = Post::filter($filter)->orderBy('created_at', 'desc')->paginate(5);
    return view('posts.index', compact('posts'));
  }
}
