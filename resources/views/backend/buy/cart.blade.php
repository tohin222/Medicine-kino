@extends('backend.main')
@section('contains')
  <!-- Orders -->
  <div class="orders">
    <div class="row justify-content-center">
      <div class="col-xl-10">
        <div class="card">
          <div class="card-body">
            <h4 class="box-title">Cart List </h4>
          </div>
          <div class="card-body--">
            <div class="table-stats order-table ov-h">
              <table class="table " id="example">
                <thead>
                  <tr>
                    <th class="serial">Serial</th>
                    <th>Medicine Name</th>
                    <th>Medicine Quantity</th>
                    <th>input</th>


                  </tr>
                </thead>
                <tbody>

                  @php
                   $a = 1;
                   @endphp
                   @php
                   $order_total = 0;
                   @endphp
                   @foreach($carts as $cart)
                   <tr>
                     <td>{{$a}}</td>
                     <td><span class="name">{{ $cart->cart->medicine_name }}</span></td>
                     <td><span class="name">{{$cart->cart->medicine_price}} <font>X {{$cart->medicine_quantity}}</font></span></td>
                     <td><span class="name">{{$cart->cart->medicine_price*$cart->medicine_quantity}}</span></td>
                      @php
                      $order_total = $order_total+$cart->cart->medicine_price*$cart->medicine_quantity;

                      @endphp
                   </tr>
                   @php
                   $a++;;
                   @endphp


                     @endforeach

                </tbody>
              </table>
              <div class="row">
          <div class="col-md-3 offset-md-3">
            <li class="list-group-item d-flex justify-content-between align-items-center">
               Total Order Prize
             </li>
          </div>
          <div class="col-md-3">
            <li class="list-group-item d-flex justify-content-between align-items-center">
               {{$order_total}}
             </li>
          </div>
          <div class="col-md-6 offset-md-3

           mt-3">
            <li class="d-flex justify-content-between align-items-center">

               <form  action="{{route('order_all')}}" method="post">
                 @csrf
                  @foreach($carts as $cart)
                 <input type="hidden" name="order_medicine_name" value="{{ $cart->cart->medicine_name }}">
                 <input type="hidden" name="order_medicine_quantity" value="{{ $cart->medicine_quantity }}">
                 <input type="hidden" name="total_order_medicine_price" value="{{$cart->cart->medicine_price*$cart->medicine_quantity}}">
                  @endforeach
                 <input type="hidden" value="{{$order_total}}"  name="order_all">
                  <button type="submit" class="btn btn-info">order</button>
               </form>
             </li>
          </div>
        </div>
            </div> <!-- /.table-stats -->
          </div>
        </div> <!-- /.card -->
      </div>  <!-- /.col-lg-8 -->


    </div>
  </div>
  <!-- /.orders -->
@endsection
