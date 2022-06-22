<?php

namespace App\Http\Controllers\Comment;

use App\Http\Requests\Comment\UpdateRequest;

use App\Models\Comment;

class UpdateController extends BaseController
{
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Comment  $comment
   * @return \Illuminate\Http\Response
   */
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Comment  $comment
   * @return \Illuminate\Http\Response
   */
  public function __invoke(UpdateRequest $request, Comment $comment)
  {
    // if ($request->user()->cannot('update', $comment)) {
    //   abort(403);
    // }

    $data = $request->validated();
    $this->service->update($data, $comment);

    return redirect()->route('Comments.index');
  }
}
