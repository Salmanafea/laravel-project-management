@extends('layouts.app')

@section('content')

<div class="col-12">
    <h1 class="p-3 border text-center my-3">Edit Task</h1>
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

    <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="form border p-3">
        @csrf
        @method('PUT')

        {{-- Task Title --}}
        <div class="mb-3">
            <label class="form-label">Task Title</label>
            <input type="text" class="form-control"
                   name="title"
                   value="{{ old('title', $task->title) }}">
        </div>

        {{-- Task Description --}}
        <div class="mb-3">
            <label class="form-label">Task Description</label>
            <textarea class="form-control"
                      name="description"
                      rows="3">{{ old('description', $task->description) }}</textarea>
        </div>

        {{-- Project --}}
        <div class="mb-3">
            <label class="form-label">Project</label>
            <select name="project_id" class="form-control">
                <option value="">-- Select Project --</option>

                @foreach ($projects as $project)
                    <option value="{{ $project->id }}"
                        {{ old('project_id', $task->project_id) == $project->id ? 'selected' : '' }}>
                        {{ $project->title }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Completed --}}
        <div class="form-check mb-3">
            <input type="checkbox"
                   class="form-check-input"
                   name="is_completed"
                   id="completed"
                   {{ old('is_completed', $task->is_completed) ? 'checked' : '' }}>
            <label class="form-check-label" for="completed">
                Completed
            </label>
        </div>

        <button class="btn btn-success">Update Task</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
    </form>

</div>

@endsection
