@extends('layouts.app')

@section('content')

<div class="col-12">
    @role('admin')
    <a href="{{ route('tasks.create') }}" class="btn btn-primary my-3">
        Add New Task
    </a>
    @endrole

    <h1 class="p-3 border text-center my-3">All Tasks</h1>
</div>

<div class="col-12">

    {{-- Errors --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Success message --}}
    @if(session('success'))
        <div class="alert alert-success my-2">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Project</th>
                <th>Owner</th>
                @role('admin')
                <th colspan="2">Action</th>
                @endrole
            </tr>
        </thead>

        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $task->title }}</td>
                <td>{{ \Str::limit($task->description, 50) }}</td>
                <td>{{ $task->project->title ?? '-' }}</td>
                <td>{{ optional($task->project->user)->name ?? '-' }}</td>

                @role('admin')
                <td>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-info btn-sm">
                        Edit
                    </a>
                </td>

                <td>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST"
                          onsubmit="return confirm('Are you sure you want to delete this task?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
                @endrole
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Pagination --}}
    {{ $tasks->links() }}

</div>

@endsection
