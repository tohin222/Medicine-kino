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
                <th class="wd-15p">Image</th>
                <th class="wd-10p">Medicine Name</th>
                <th class="wd-10p">Medicine Quantity</th>
                <th class="wd-5p">Medicine Price</th>
                <th class="wd-10p">Company Name</th>
                <th class="wd-15p">Disease Name</th>
                @if (auth::user()->role==1)
                <th class="wd-10p">Action</th>
              @endif
              </tr>
            </thead>
            <tbody>
              @php
                    $serail = 1;
                  @endphp
                  @foreach ($medicines as $medicine)
                    <tr>
                      <td class="serial">{{$serail}}.</td>
                      <td class="avatar">
                        <div class="round-img">
                          <a href="#"><img class="rounded-circle" src="{{asset('/storage')}}/{{$medicine->medicine_image}}" alt="" height="100"></a>
                        </div>
                      </td>

                      <td>  <span class="name">{{$medicine->medicine_name}}</span> </td>
                      <td>  <span class="name">{{$medicine->medicine_quantity}}</span> </td>
                      <td>  <span class="name">{{$medicine->medicine_price}}</span> </td>
                      <td><span class="name">{{$medicine->company->company_name}}</span></td>
                      <td><span class="name">{{$medicine->disease->disease_name}}</span></td>
                      @if (auth::user()->role==1)
                      <td class="text-center">
                        <div class="btn-group align-top">
                        <a class="btn btn-sm btn-primary badge"  href="{{url('admin/medicine/edit')}}/{{$medicine->id}}">edit</a><a class="btn btn-sm btn-primary badge" href="{{url('admin/medicine/delete')}}/{{$medicine->id}}"><i class="fa fa-trash"></i></a>
                        </div>
                      </td>
                    @endif
										</td>
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
