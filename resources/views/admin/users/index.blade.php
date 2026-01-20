@extends('layouts.app')

@section('content')

<div class="col-12">
    <h1 class="p-3 border text-center my-3">All Users</h1>
</div>

<div class="col-12">

    @if(session('success'))
        <div class="alert alert-success my-2">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->getRoleNames()->first() ?? '-' }}</td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-sm">Edit Role</a>

                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;"
                          onsubmit="return confirm('Are you sure you want to delete this user?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $users->links() }}

</div>

@endsection
