
@extends('backend.main')

@section('contains')
  <div class="row justify-content-center">
    <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
      <div class="card">
        <div class="card-header">
          @if (session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
                @endif

          <h4>General Elements</h4>
        </div>
        <div class="card-body">
          <form class="form-horizontal" action="{{route('company_update')}}" method="post">
            @csrf
              <input type="hidden" class="form-control"   value="{{$company_info->id}}" name="company_id">
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Medicine Name</label>
              <div class="col-md-9">
                <input type="text" class="form-control" value="{{$company_info->company_name}}"  name="company_name">
              </div>
            </div>
            <button type="submit" class="btn btn-primary mt-1 mb-0">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
