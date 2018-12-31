
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
          <form class="form-horizontal" action="{{route('medicine_create')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Medicine Name</label>
              <div class="col-md-9">
                <input type="text" class="form-control" placeholder="Typing Name..." name="medicine_name">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Medicine Quantity</label>
              <div class="col-md-9">
                <input type="text" class="form-control" placeholder="Typing Quantity..." name="medicine_quantity">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Medicine Price</label>
              <div class="col-md-9">
                <input type="text" class="form-control" placeholder="Typing Price..." name="medicine_price">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-3 col-form-label">Medicine Description(optional)</label>
              <div class="col-md-9">
                <textarea class="form-control" rows="6" name="medicine_description">Hiiiii.....</textarea>
              </div>
            </div>

            <div class="form-group overflow-hidden row">
              <label class="col-md-3 col-form-label">Company Name</label>
              <div class="col-md-9">
              <select class="form-control select2 w-100" name="company_id">
                <option selected="selected">1</option>
                <option>1</option>
                <option>1</option>
                <option>1</option>
                <option>1</option>
                <option>1</option>
                <option>1</option>
              </select>
              </div>
            </div>
            <div class="form-group overflow-hidden row">
              <label class="col-md-3 col-form-label">Disease Name</label>
              <div class="col-md-9">
              <select class="form-control select2 w-100" name="disease_id">
                <option selected="selected">2</option>
                <option>2</option>
                <option>2</option>
                <option>2</option>
                <option>2</option>
                <option>2</option>
                <option>2</option>
              </select>
              </div>
            </div>

            <div class="form-group row mb-0">
              <label class="col-md-3 col-form-label">Packet Image(optional)</label>
              <div class="col-md-9">
                <input class="form-control" type="file" name="medicine_image">
              </div>
            </div>
            <button type="submit" class="btn btn-primary mt-1 mb-0">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
