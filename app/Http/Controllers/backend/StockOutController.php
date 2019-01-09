<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\backend\Medicine;

class StockOutController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function stock_out()
  {
    $medicines = Medicine::where('medicine_quantity','<=','10')->get();
    return view('backend.stock_out.stock_out',compact('medicines'));
  }
  public function new_medicine_add(Request $request,$medicine_id,$medicine_quantity)
  {
    Medicine::find($medicine_id)->increment('medicine_quantity',$medicine_quantity);
    return back()->with('success','successfully Added!');
  }

}
