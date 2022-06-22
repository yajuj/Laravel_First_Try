<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Services\Comment\Service;

class BaseController extends Controller
{
  public $service;

  /**
   * Class constructor.
   */
  public function __construct(Service $service)
  {
    $this->service = $service;
  }
}
