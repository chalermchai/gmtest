<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add Sale</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('assets/bootstrap-4.4.1/css/bootstrap.min.css') }}" rel="stylesheet">

       
    </head>
    <body class="">
        <div class="container pt-3 pb-3">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('customer') }}">Customer</a>
            </li>
            <li>
              <a class="nav-link active" href="{{ url('sale') }}">Sale</a>
            </li>
            <li>
              <a class="nav-link" href="{{ url('report') }}">Sale Report</a>
            </li>
            <li>
              <a class="nav-link" href="{{ url('student') }}">Student Grade</a>
            </li>
          </ul>
        </div>
        
        <div class="container">
            <h1>Add Sale</h1>
            <br>
            <div>
                <a class="btn btn-link" href="{{ url('sale') }}"><< Back</a>
            </div>
            <br>
            <div>
                <form method="post" action="{{ url('sale/add') }}">
                 @csrf
                  <div class="form-group">
                    <label>Customer ID</label>
                    <select class="form-control" name="ref_customer_id">
                        <option>Select -----</option>

                        @if(count($customer_list) > 0)
                            @foreach($customer_list as $key => $data)
                            <option value="{{$data->Customer_Id}}">{{$data->Customer_Id}}</option>
                            @endforeach
                        @endif
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Product</label>
                    <input type="text" class="form-control" name="product_id" value="" required>
                  </div>

                  <div class="form-group">
                    <label>Quantity</label>
                    <input type="text" class="form-control" name="quantity" value="" required>
                  </div>

                  <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" name="price" value="" required>
                  </div>

                  <div class="form-group">
                    <label>Discount 1</label>
                    <input type="text" class="form-control" name="discount_1" value="" required>
                  </div>

                  <div class="form-group">
                    <label>Discount 2</label>
                    <input type="text" class="form-control" name="discount_2" value="" required>
                  </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('assets/js/jquery-3.5.1/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/bootstrap-4.4.1/js/bootstrap.min.js') }}"></script>
    </body>
</html>
