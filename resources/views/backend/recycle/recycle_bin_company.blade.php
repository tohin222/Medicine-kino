@extends('backend.main')
@section('contains')
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          @if (session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
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
                <th class="wd-10p">Company Name</th>
                @if (auth::user()->role==1)
                <th class="wd-10p">Action</th>
                @endif
                <th class="wd-15p">Delete Time</th>
                <th class="wd-15p">Delete Date</th>
              </tr>
            </thead>
            <tbody>
              @php
                    $serail = 1;
                  @endphp
                  @foreach ($delete_companies as $delete_company)
                    <tr>
                      <td class="serial">{{$serail}}.</td>

                      <td><span class="name">{{$delete_company->company_name}}</span></td>
                      @if (auth::user()->role==1)
                      <td>
                        <a href="{{url('admin/recycle/company/restore')}}/{{$delete_company->id}}">Restore</a>
                      </td>
                    @endif
                      <td>  <span class="name">{{$delete_company->deleted_at->diffForHumans()}}</span> </td>
                      <td>  <span class="name">{{$delete_company->deleted_at->format('d-m-Y')}}</span> </td>
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
