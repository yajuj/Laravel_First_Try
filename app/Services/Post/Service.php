<?php

namespace App\Services\Post;

use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class Service
{
  public function store(array $data)
  {
    $data['author'] = auth()->user()->name;
    Post::create($data);
  }
  public function update(array $data, Post $post)
  {
    $post->update($data);
  }
  public function checkImage(Request $request)
  {
    return $request->file('photo') ? $request->file('photo')->store('images') : null;
  }
}
