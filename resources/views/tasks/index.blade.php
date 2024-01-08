@extends('layouts.app')

@section('content')
    <center>
        <h1>TASK LIST</h1>
        <br>

        @extends('layouts.app')

        @section('content')
            <div class="container text-center">
                <h1>TASK LIST</h1>
                <br>
        
                @foreach ($tasks as $task)
                    <div class="card mb-3">
                        <div class="card-body">
                            <p>{{ $task->description }}</p>
                            <a href="{{ route('tasks.edit', ['task' => $task->id]) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>
                            <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
        
                <a href="/tasks/create" class="btn btn-primary btn-lg position-relevent">ADD NEW TASK</a>
                <br><br><br><br><br>
            </div>
        @endsection
        

        <br>
        <a href="/tasks/create" class="btn btn-primary btn-lg position-relevent">ADD NEW TASK</a>
        <br><br><br><br><br>
    </center>
@endsection
