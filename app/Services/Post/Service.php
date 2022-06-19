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
    if (!$request->file('photo')) return null;

    $file = $request->file('photo');

    $mimeTypeOfFile = $request->file('photo')->getMimeType();

    $mimes = ['image/jpeg', 'image/png', 'image/gif'];

    if (!in_array($mimeTypeOfFile, $mimes)) return null;

    return $file->store('images');
  }
}
