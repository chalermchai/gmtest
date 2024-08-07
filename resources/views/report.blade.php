<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sale Report</title>

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
              <a class="nav-link" href="{{ url('sale') }}">Sale</a>
            </li>
            <li>
              <a class="nav-link active" href="{{ url('report') }}">Sale Report</a>
            </li>
            <li>
              <a class="nav-link" href="{{ url('student') }}">Student Grade</a>
            </li>
          </ul>
        </div>
        
        <div class="container">
            <h1>Sale Report</h1>
            <br>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Customer ID</th>
                  <th scope="col">Product ID</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Price</th>
                  <th scope="col">Gross</th>
                  <th scope="col">Discount 1</th>
                  <th scope="col">Discount 2</th>
                  <th scope="col">Net</th>
                </tr>
              </thead>
              <tbody>
                @if(count($customer_sale_list) > 0)
                  @foreach($customer_sale_list as $key => $data)
                  <tr>
                    <td>{{$data->Ref_Customer_Id}}</td>
                    <td>{{$data->Product_Id}}</td>
                    <td>{{number_format($data->Quantity)}}</td>
                    <td>{{number_format($data->Price, 2)}}</td>
                    <td>{{number_format($data->Price * $data->Quantity, 2)}}</td>
                    <td>{{number_format($data->Discount_1, 2)}}</td>
                    <td>{{number_format($data->Discount_2, 2)}}</td>
                    <td>{{number_format(($data->Price * $data->Quantity) - $data->Discount_1 - $data->Discount_2, 2)}}</td>
                  </tr>
                  @endforeach
                @else
                  <tr>
                    <td colspan="8">Data not found.</td>
                  </tr>
                @endif
              </tbody>
            </table>
        </div>
        <script type="text/javascript" src="{{ asset('assets/js/jquery-3.5.1/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/bootstrap-4.4.1/js/bootstrap.min.js') }}"></script>
    </body>
</html>