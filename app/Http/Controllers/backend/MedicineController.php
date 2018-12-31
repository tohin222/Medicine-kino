<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MedicineController extends Controller
{
  public function medicine_add()
  {
  return view('backend.medicine_add');
  }
  public function medicine_show()
  {
  return view('backend.medicine_show');
  }
}
