@extends('layouts.app')
<center>
@section('content')
    <h1>TASK LIST</h1>
<br>
    @foreach ($tasks as $task)
        <div class="card">
            <div class="card-body">
               <p> {{ $task->description }}</p>
            </div>
          </div>
          <br>
    @endforeach
    <br>
<a href="/tasks/create" class="btn btn-primary btn-lg position-relevent "> ADD NEW TASK</a>
</center>
@endsection
