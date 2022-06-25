<?php

namespace App\Http\Controllers\Post\Web;

use App\Models\Post;
use App\Http\Controllers\Controller;

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
    return view('posts.show', compact('post'));
  }
}
