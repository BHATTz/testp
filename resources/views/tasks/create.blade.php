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
  <h1>New Task</h1>
    <form action="/tasks" method="POST">
      <div class="form-group">
        <label for="description">Task Description</label>
        <input type="text" class="form-control" id="description" name="description">
      </div>
      <div calss="form-group">
      <button type="submit" class="btn btn-primary">Add Task</button>
    </div>
    </form>
@endsection

{{-- </body>
</html> --}}