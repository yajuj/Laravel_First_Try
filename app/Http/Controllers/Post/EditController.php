<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Request $request, Post $post)
  {
    if ($request->user()->cannot('view', $post)) {
      abort(403);
    }
    return view('posts.update', compact('post'));
  }
}
