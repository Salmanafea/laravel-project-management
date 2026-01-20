<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Project Manager</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">

    <a class="navbar-brand" href="{{ route('dashboard') }}">Project Manager</a>

    <ul class="navbar-nav me-auto">

      {{-- Home --}}
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">Home</a>
      </li>

      {{-- Projects (Admin فقط) --}}
      @role('admin')
      <li class="nav-item">
        <a class="nav-link" href="{{ route('projects.index') }}">Projects</a>
      </li>
      @endrole

      {{-- Tasks (Admin + User) --}}
      @role('admin|user')
      <li class="nav-item">
        <a class="nav-link" href="{{ route('tasks.index') }}">Tasks</a>
      </li>
      @endrole

      {{-- Activity Logs (Admin فقط) --}}
      @role('admin')
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logs.index') }}">Activity Logs</a>
      </li>
      @endrole

      {{-- Users Management (Admin فقط) --}}
      @role('admin')
      <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index') }}">Users</a>
      </li>
      @endrole

    </ul>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="btn btn-outline-danger btn-sm">Logout</button>
    </form>

  </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
