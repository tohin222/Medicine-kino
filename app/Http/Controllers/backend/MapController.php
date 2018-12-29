<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MapController extends Controller
{
  public function map()
  {
      return view('backend.maps-gmap');
  }
}
