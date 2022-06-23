<?php

namespace App\Http\Controllers\Comment;

use App\Models\Comment;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Comment  $comment
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Request $request, Comment $comment)
  {
    if ($request->user()->cannot('delete', $comment)) {
      abort(403);
    }
    $comment->destroy($comment->id);
    return redirect()->route('posts.show', $comment->post);
  }
}
