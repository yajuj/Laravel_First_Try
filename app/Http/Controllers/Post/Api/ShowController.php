<?php

namespace App\Http\Controllers\Post\Api;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Resources\Post\PostResource;

class ShowController extends Controller
{
  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Post $post)
  {
    return new PostResource($post);
  }
}
