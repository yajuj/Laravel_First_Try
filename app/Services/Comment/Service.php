<?php

namespace App\Services\Comment;

use App\Models\Comment;


class Service
{
  public function store(array $data, int $postId)
  {
    $data['user_id'] = auth()->user()->id;
    $data['post_id'] = $postId;
    Comment::create($data);
  }
  public function update(array $data, Comment $comment)
  {
    $comment->update($data);
  }
}
