<?php

namespace App\Http\Controllers\Comment;

use App\Http\Requests\Comment\StoreRequest;
use App\Models\Post;

class StoreController extends BaseController
{
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function __invoke(StoreRequest $request, int $postId)
  {
    $data = $request->validated();
    $this->service->store($data, $postId);
    return redirect()->route('posts.show', $postId);
  }
}
