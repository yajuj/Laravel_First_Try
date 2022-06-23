<?php

namespace App\Http\Controllers\Comment;

use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Comment  $comment
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Request $request, Comment $comment)
  {
    if ($request->user()->cannot('update', $comment)) {
      abort(403);
    }
    return view('comments.update', compact('comment'));
  }
}
