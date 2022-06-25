<?php

namespace App\Http\Controllers\Post\Web;

use App\Http\Requests\Post\StoreRequest;

class StoreController extends BaseController
{
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function __invoke(StoreRequest $request)
  {
    $data = $request->validated();
    $data['image'] = $this->service->checkImage($request);
    $this->service->store($data);
    return redirect()->route('posts.index');
  }
}
