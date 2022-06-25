<?php

namespace App\Http\Controllers\Post\Api;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Http\Resources\Post\PostCollection;

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

    $filter = app()->make(PostFilter::class, ['queryParams' => $data]);

    $posts = Post::filter($filter)->orderBy('created_at', 'desc')->paginate(5);
    return new PostCollection($posts);
  }
}
