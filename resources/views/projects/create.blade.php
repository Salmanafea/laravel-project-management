@extends('layouts.app')

@section('content')

<div class="col-12">
    <h1 class="p-3 border text-center my-3">Add Project</h1>
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

    <form action="{{ route('projects.store') }}" method="POST" class="form border p-3">
        @csrf

        <div class="mb-3">
            <label class="form-label">Project Title</label>
            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Project Description</label>
            <textarea class="form-control" name="description" rows="3">{{ old('description') }}</textarea>
        </div>

    

        <button class="btn btn-primary">Add Project</button>
    </form>

</div>

@endsection
