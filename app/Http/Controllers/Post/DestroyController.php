<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Request $request, Post $post)
  {
    if ($request->user()->cannot('delete', $post)) {
      abort(403);
    }

    if ($post->image) unlink($post->image);
    $post->destroy($post->id);
    return redirect()->route('posts.index');
  }
}
