<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Customer List</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('assets/bootstrap-4.4.1/css/bootstrap.min.css') }}" rel="stylesheet">

       
    </head>
    <body class="">
        <div class="container pt-3 pb-3">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" href="{{ url('customer') }}">Customer</a>
            </li>
            <li>
              <a class="nav-link" href="{{ url('sale') }}">Sale</a>
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
            <h1>Customer</h1>
            <br>
            <div>
                <a class="btn btn-success" href="{{ url('customer/add') }}">Add</a>
            </div>
            <br>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Customer ID</th>
                  <th scope="col">Birthday</th>
                  <th scope="col">Percent 1</th>
                  <th scope="col">Percent 2</th>
                </tr>
              </thead>
              <tbody>
                @if(count($customer_list) > 0)
                  @foreach($customer_list as $key => $data)
                  <tr>
                    <th>
                        <a class="btn btn-info" href="{{ url('customer/edit') }}/{{$data->Customer_Id}}">Edit</a>
                        <a class="btn btn-danger" href="{{ url('customer/delete') }}/{{$data->Customer_Id}}">Delete</a>
                    </th>
                    <td>{{$data->Customer_Id}}</td>
                    <td>{{$data->Birthday}}</td>
                    <td>{{$data->Percent_1}}</td>
                    <td>{{$data->Percent_2}}</td>
                  </tr>
                  @endforeach
                @else
                  <tr>
                    <td colspan="5">Data not found.</td>
                  </tr>
                @endif
              </tbody>
            </table>
        </div>
        <script type="text/javascript" src="{{ asset('assets/js/jquery-3.5.1/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/bootstrap-4.4.1/js/bootstrap.min.js') }}"></script>
    </body>
</html>