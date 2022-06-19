<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use App\Http\Controllers\Controller;

class DestroyController extends Controller
{
  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Post $post)
  {
    if ($post->image) unlink($post->image);
    $post->destroy($post->id);
    return redirect()->route('posts.index');
  }
}
