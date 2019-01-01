@extends('backend.main')
@section('contains')
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          @if (session('alert'))
                  <div class="alert alert-success">
                      {{ session('alert') }}
                  </div>
                @endif
          @if (session('update'))
                  <div class="alert alert-success">
                      {{ session('update') }}
                  </div>
                @endif
          <h4>Defalut Datatables</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
          <table id="example" class="table table-striped table-bordered border-t0 text-nowrap w-100" >
            <thead>
              <tr>
                <th class="wd-5p">Serial</th>
                <th class="wd-10p">total taka</th>
                <th class="wd-10p">Time</th>
                <th class="wd-10p">Date</th>
              </tr>
            </thead>
            <tbody>
              @php
                    $serail = 1;
                  @endphp
                  @foreach ($orders as $order)
                    <tr>
                      <td class="serial">{{$serail}}.</td>
                      <td>  <span class="name">{{$order->order_total}}</span> </td>
                      <td>  <span class="name">{{$order->created_at->format('d-m-Y')}}</span> </td>
                      <td>  <span class="name">{{$order->created_at->diffForHumans() }}</span> </td>
                    </tr>
                    @php
                      $serail++;
                    @endphp
                  @endforeach


            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>
  </div>
@endsection
