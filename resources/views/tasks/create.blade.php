{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Task list</title>
</head>
<body> --}}

@extends('layouts.app')  

@section('content')
<center>
  <h1>NEW TASK</h1>
  <br>
    <form action="/tasks" method="POST">
      <div class="form-group">
        @csrf
        <label for="description">TASK DESCRIPTION</label>
        <input type="text" class="form-control" id="description" name="description">
      </div>
      <br>
      <div class="btn-toolbar d-flex justify-content-center">
        <div class="form-group px-8">
            <button type="submit" class="btn btn-primary btn-group mr-2">ADD TASK</button>
        </div>     
        <div class="btn-group">
          <a href="/tasks/" class="btn btn-secondary position-relevent "> VIEW TASK</a>
        </div>
    </div>
    </form>
  </center>
@endsection

{{-- </body>
</html> --}}