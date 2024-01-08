@extends('layouts.app')  

@section('content')
<center>
  <br><br><br><br>
  <h1>NEW TASK</h1>
  <br>
  <form action="/tasks" method="POST">
    <div class="form-group">
      @csrf
      <label for="description">TASK DESCRIPTION</label>
      <textarea class="form-control" id="description" name="description" rows="3" style="width: 50%;"></textarea>
    </div>
    <br>
    <div class="btn-toolbar d-flex justify-content-center">
      <div class="form-group px-4"> <!-- Added space -->
        <button type="submit" class="btn btn-primary btn-group mr-2">ADD TASK</button>
      </div>     
      <div class="btn-group">
        <a href="/tasks/" class="btn btn-secondary position-relevent"> VIEW TASK</a>
      </div>
    </div>
  </form>
</center>
@endsection