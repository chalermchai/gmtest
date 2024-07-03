<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Student Grade</title>

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
              <a class="nav-link" href="{{ url('report') }}">Sale Report</a>
            </li>
            <li>
              <a class="nav-link active" href="{{ url('student') }}">Student Grade</a>
            </li>
          </ul>
        </div>
        
        <div class="container">
        <div class="jumbotron">
          <h4 class="">SQL Only (MySQL)</h4>
            <code class="d-block">
              SELECT 
                <br>&nbsp;&nbsp;Student
                <br>&nbsp;&nbsp;,Score
                <br>&nbsp;&nbsp;,(CASE
                <br>&nbsp;&nbsp;&nbsp;&nbsp;WHEN Score >= 90 THEN "A"
                <br>&nbsp;&nbsp;&nbsp;&nbsp;WHEN Score >= 80 AND Score <= 89 THEN "B"
                <br>&nbsp;&nbsp;&nbsp;&nbsp;WHEN Score >= 70 AND Score <= 79 THEN "C"
                <br>&nbsp;&nbsp;&nbsp;&nbsp;WHEN Score >= 60 AND Score <= 69 THEN "D"
                <br>&nbsp;&nbsp;&nbsp;&nbsp;ELSE "E"
                <br>&nbsp;&nbsp;END) AS Grade
              <br>FROM score
            </code>
          </div>
        </div>

        <div class="container">
            <h1>Student Grade</h1>
            <br>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Student</th>
                  <th scope="col">Score</th>
                  <th scope="col">Grade</th>
                </tr>
              </thead>
              <tbody>
                @if(count($score_list) > 0)
                  @foreach($score_list as $key => $data)
                  <tr>
                    <td>{{$data->Student}}</td>
                    <td>{{$data->Score}}</td>
                    <td>{{$data->_grade}}</td>
                  </tr>
                  @endforeach
                @else
                  <tr>
                    <td colspan="3">Data not found.</td>
                  </tr>
                @endif
              </tbody>
            </table>
        </div>
        <script type="text/javascript" src="{{ asset('assets/js/jquery-3.5.1/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/bootstrap-4.4.1/js/bootstrap.min.js') }}"></script>
    </body>
</html>