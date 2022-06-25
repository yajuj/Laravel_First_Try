<?php

namespace App\Http\Controllers\Post\Api;

use App\Http\Requests\Post\UpdateRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;


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

    return new PostResource($data);
  }
}
