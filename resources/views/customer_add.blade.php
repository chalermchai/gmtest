<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Customer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('assets/bootstrap-4.4.1/css/bootstrap.min.css') }}" rel="stylesheet">

       
    </head>
    <body class="">
        <div class="container">
            <h1>Add Customer</h1>
            <br>
            <div>
                <a class="btn btn-default" href="{{ url('customer') }}">Back</a>
            </div>
            <br>
            <div>
                <form method="post" action="{{ url('customer/add') }}">
                 @csrf
                  <div class="form-group">
                    <label>Birthday</label>
                    <input type="date" class="form-control" name="birthday" value="" required>
                  </div>

                  <div class="form-group">
                    <label>Percent 1</label>
                    <input type="text" class="form-control" name="percent_1" value="" required>
                  </div>

                  <div class="form-group">
                    <label>Percent 2</label>
                    <input type="text" class="form-control" name="percent_2" value="" required>
                  </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('assets/bootstrap-4.4.1/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery-3.5.1/jquery.min.js') }}"></script>
    </body>
</html>
