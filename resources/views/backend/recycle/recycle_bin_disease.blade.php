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
                <th class="wd-10p">Disease Name</th>
                <th class="wd-10p">Action</th>
              </tr>
            </thead>
            <tbody>
              @php
                    $serail = 1;
                  @endphp
                  @foreach ($delete_diseasees as $delete_disease)
                    <tr>
                      <td class="serial">{{$serail}}.</td>

                      <td><span class="name">{{$delete_disease->disease_name}}</span></td>
                      <td>
                         <a href="{{url('admin/recycle/disease/restore')}}/{{$delete_disease->id}}">Restore</a>
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