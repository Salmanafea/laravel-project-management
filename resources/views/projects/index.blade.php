@extends('layouts.app')

@section('content')

<div class="col-12">
    <a href="{{ url('projects/create') }}" class="btn btn-primary my-3">
        Add New Project
    </a>

    <h1 class="p-3 border text-center my-3">All Projects</h1>
</div>

<div class="col-12">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

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
                <th>User</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $project->title }}</td>
                <td>{{ \Str::limit($project->description, 50) }}</td>
                <td>{{ $project->user->name }}</td>

                <td>
                    <a href="{{ url('projects/'.$project->id.'/edit') }}"
                       class="btn btn-info btn-sm">
                        Edit
                    </a>
                </td>

                <td>
                    <form action="{{ url('projects/'.$project->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $projects->links() }}

</div>

@endsection
