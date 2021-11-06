<!DOCTYPE html>
<html>
<head>
    <title>Laravel Datatables Server Side Data Processing Example - ItSolutionStuff.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
    
<div class="container">
<div class="card" style="width: ;">
<div class="card-header">
<h5 class="card-title">Unicoconnect Assignment</h5></div>
  <div class="card-body">
    <h5>SQL query such that there is a user table with column "grades". You have to
find out the user records from users table where users have got grades in this pattern
(1,3) or (1,3,2) etc</h5><br>


<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User</th>
      <th scope="col">Grades</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    @foreach($userData as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->grades}}</td>
      <td>{{$data->email}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>
   
</body>

