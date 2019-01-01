<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\backend\Medicine;
use App\model\backend\Company;
use App\model\backend\Disease;
use App\model\backend\Cart;
use App\model\backend\Order;
use Carbon\Carbon;

class BuyController extends Controller
{
  public function buy_sells()
  {
    $medicines = Medicine::all();
  return view('backend.buy.buy_sells',compact('medicines'));
  }
  public function medicine_add_cart(Request $request,$medicine_id,$medicine_quantity)
  {
    //if(Medicine::find($medicine_id)->medicine_quantity->$medicine_quantity)
//Medicine::find($medicine_id)->medicine_quantity >= $medicine_quantity
if(Medicine::find($medicine_id)->medicine_quantity >= $medicine_quantity){
  Medicine::find($medicine_id)->decrement('medicine_quantity',$medicine_quantity);
  Cart::insert([
    'medicine_id'=>$medicine_id,
    'medicine_quantity'=>$medicine_quantity,
    'created_at' => Carbon::now(),
  ]);
  return back();
}
if(Medicine::find($medicine_id)->medicine_quantity < $medicine_quantity){

  return back();

  }
}

public function cart()
    {
      // $order_daily = Order::whereDate('created_at', Carbon::today())->get();
      // $order_monthly =  Order::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->get();
      //
      // $order_yearly = DB::table('orders')
      // ->whereYear('created_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])
      // ->get();
      $counter = 0;
        $carts = Cart::all();
        foreach ($carts as $cart) {
          $counter ++;
        }
        echo $counter;
        if ($counter>0) {
          return view('backend.buy.cart',compact('carts'));
        }
        else {
          return back()->with('success', 'No order add');
        }
        // dd($carts);
        //return view('backend.buy.cart',compact('carts'));
    }
    public function order_all(Request $request)
          {
            Order::insert([
              'order_total' => $request->order_all,
              'created_at' => Carbon::now()
            ]);
            Cart::truncate();
              return redirect()->route('buy_sells')->with('success', 'Order Done');
          }
      public function buy_order()
      {
          $orders = Order::orderBy('created_at', 'desc')
                ->get();
          return view('backend.buy.buy_order',compact('orders'));
      }

}
