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
            <a type="submit"  class="btn btn-primary" href="{{route('cart')}}">Add to cart</a>
          <div class="table-responsive">
          <table id="example" class="table table-striped table-bordered border-t0 text-nowrap w-100" >
            <thead>
              <tr>
                <th class="wd-5p">Serial</th>
                <th class="wd-10p">Medicine Name</th>
                <th class="wd-10p">Medicine Quantity</th>
                <th class="wd-5p">Medicine Price</th>
                <th  class="wd-5p">input</th>
                <th class="wd-5p">Add</th>
              </tr>
            </thead>
            <tbody>
              @php
                    $serail = 1;
                  @endphp
                  @foreach ($medicines as $medicine)
                    <tr>
                      <td class="serial">{{$serail}}.</td>
                      <td>  <span class="name">{{$medicine->medicine_name}}</span> </td>
                      <td>  <span class="name">{{$medicine->medicine_quantity}}</span> </td>
                      <td>  <span class="name">{{$medicine->medicine_price}}</span> </td>
                      <td>  <span class="name"><input type="text" name="" id="{{$medicine->id}}"> </span> </td>
                      <td>  <span class="name"><button type="submit" name="button" class="btn btn-warning add_button" value="{{$medicine->id}}">Add</button></span> </td>
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
@section('footer_scripts')
  <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
  <script>
  $(document).ready(function() {
    $('#bootstrap-data-table-export').DataTable();
} );

    $(document).ready(function(){
      $('.add_button').click(function(){
       var idwehave = $(this).val();
       var quantity = $('#'+idwehave).val();
      // var price_from_table = $(this).closest('tr').find('.price_from_table').html();

       if(quantity==''){
         alert("Kiccu Nai!!");
       }
       else{
         var link = '/admin/buy/addmedicine/'+idwehave+'/'+quantity;
         window.location.href = link;
       }
      });
    });
  </script>
@endsection
