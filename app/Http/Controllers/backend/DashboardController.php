<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\backend\Order;
use Carbon\Carbon;
use DB;

class DashboardController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function dashboard()
    {
      $order_daily = Order::whereDate('created_at', Carbon::today())->get();
   $order_monthly =  Order::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->get();

   $order_yearly = DB::table('orders')
   ->whereYear('created_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])
   ->get();
      return view('backend.dashboard.index',compact('order_daily','order_monthly','order_yearly'));
    }
}
