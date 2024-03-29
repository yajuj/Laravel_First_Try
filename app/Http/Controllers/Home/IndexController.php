<?php

namespace App\Http\Controllers\Home;

use App\Models\Post;
use App\Models\User;
use App\Http\Requests\Post\FilterRequest;
use App\Http\Filters\PostFilter;

class IndexController
{
  public function __invoke(FilterRequest $request)
  {
    $data = $request->validated();
    if (isset($data['author'])) {
      $id = User::where('name', 'like', "%{$data['author']}%")->get()->first()->id ?? null;
      $data['author'] = $id;
    }
    $filter = app()->make(PostFilter::class, ['queryParams' => $data]);
    $posts = Post::filter($filter)->orderBy('created_at', 'desc')->paginate(10);;
    return view('index', compact('posts'));
  }
}
