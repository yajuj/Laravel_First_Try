<?php

namespace App\Http\Controllers\Post\Web;

use App\Http\Controllers\Controller;
use App\Services\Post\Service;

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
