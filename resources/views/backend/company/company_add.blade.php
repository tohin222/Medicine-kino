
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
          <form class="form-horizontal" action="{{route('company_create')}}" method="post">
            @csrf
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Company Name</label>
              <div class="col-md-9">
                <input type="text" class="form-control{{ $errors->has('company_name') ? ' is-invalid' : '' }}" placeholder="Typing Company Name..."  name="company_name">
                @if ($errors->has('company_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('company_name') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <button type="submit" class="btn btn-primary mt-1 mb-0">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
