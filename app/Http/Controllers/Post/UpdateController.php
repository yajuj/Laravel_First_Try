<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\UpdateRequest;

use App\Models\Post;
use App\Http\Controllers\Controller;

class UpdateController extends BaseController
{
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function __invoke(UpdateRequest $request, Post $post)
  {
    if ($request->user()->cannot('update', $post)) {
      abort(403);
    }

    $data = $request->validated();
    $imageFromRequest = $this->service->checkImage($request);
    $data['image'] =  $imageFromRequest ? $imageFromRequest : $post->image;
    $this->service->update($data, $post);

    return redirect()->route('posts.index');
  }
}
