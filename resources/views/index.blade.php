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
<style>
#gradient {
  background-color: pink; /* For browsers that do not support gradients */
  background-image: linear-gradient(to bottom right, purple, pink);
}
</style>
<body id="gradient">
    
<div class="container">
    <div class="card" style="width: 50rem; height: 40rem;">
        <div class="card-header">
            <h5 class="card-title">Unicoconnect Assignment</h5></div>
        <div class="card-body">
            <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Task</th>
                <th scope="col">Description</th>
                <th scope="col">View</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Cron Job Scheduler</td>
                <td>Cron Job Scheduler to backup Mysql DB to google drive.</td>
                <td><a href="{{route('backup')}}" class="btn btn-primary">View</a></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>REST API</td>
                <td>Rest Api to fetch 20k records at a time with minimum RTT(Round Trip Time)</td>
                <td><a href="{{url('/api/users')}}" class="btn btn-primary">View</a></td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>SQL Query</td>
                <td>SQL query such that there is a user table with column "grades". You have to find out the user records from users table where users have got grades in this pattern
                    (1,3) or (1,3,2) etc</td>
                <td><a href="{{route('grades')}}" class="btn btn-primary">View</a></td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>
   
</body>

