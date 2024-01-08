<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Task list</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light text-center">
      <a class="navbar-brand" href="/">
        <img src="{{ asset('notes.png') }}" width="30" height="30" class="d-inline-block align-top" alt="Notes Icon">
        Todo-App
    </a>    
        <div class="navbar-expand-lg" id="navbarNav">
          <ul class="navbar-nav ml-auto d-flex flex-column flex-lg-row">
              <li class="nav-item">
                  <a class="nav-link" href="/">All Tasks</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/tasks/create">Add New Task</a>
              </li>
          </ul>
      </div>
    </nav>

    <div class="container">
      @yield('content')
    </div>

    <footer class="bg-body-tertiary text-center fixed-bottom">
      <div class="container p-1"></div>
      <div class="text-center p-3">
          © 2024 Copyright: Todo-App
          <a class="text-body" href="/tasks/create">Todo-App</a>
      </div>
  </footer>
  
    
</body>
</html>