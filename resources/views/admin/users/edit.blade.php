@extends('layouts.app')

@section('content')

<div class="col-12">
    <h1 class="p-3 border text-center my-3">Edit User Role</h1>
</div>

<div class="col-8 mx-auto">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="POST" class="form border p-3">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" value="{{ $user->name }}" disabled>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" value="{{ $user->email }}" disabled>
        </div>

        <div class="mb-3">
            <label class="form-label">Role</label>
            <select name="role" class="form-control">
                @foreach ($roles as $role)
                    <option value="{{ $role->name }}"
                        {{ $user->getRoleNames()->contains($role->name) ? 'selected' : '' }}>
                        {{ $role->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success">Update Role</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
    </form>

</div>

@endsection
