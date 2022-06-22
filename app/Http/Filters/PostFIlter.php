<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class PostFilter extends AbstractFilter
{
  public const AUTHOR = 'author';
  public const TITLE = 'title';
  public const CONTENT = 'content';
  public const DESCRIPTION = 'description';


  protected function getCallbacks(): array
  {
    return [
      self::AUTHOR => [$this, 'author'],
      self::TITLE => [$this, 'title'],
      self::CONTENT => [$this, 'content'],
      self::DESCRIPTION => [$this, 'categoryId'],
    ];
  }

  public function title(Builder $builder, $value)
  {
    $builder->where('title', 'like', "%{$value}%");
  }

  public function content(Builder $builder, $value)
  {
    $builder->where('content', 'like', "%{$value}%");
  }

  public function description(Builder $builder, $value)
  {
    $builder->where('description', 'like', "%{$value}%");
  }
  public function author(Builder $builder, $value)
  {
    $builder->where('user_id', '=', $value);
  }
}
