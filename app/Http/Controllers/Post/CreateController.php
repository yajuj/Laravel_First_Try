<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function __invoke()
  {

    return view('posts.create');
  }
}
