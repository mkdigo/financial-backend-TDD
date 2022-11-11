<?php

namespace App\Http\Controllers;

use App\Exceptions\ExceptionHandler;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  protected function response($data = null, int $code = 200)
  {
    return response()->json([
      'success' => true,
      'data' => $data,
    ], $code);
  }
}
