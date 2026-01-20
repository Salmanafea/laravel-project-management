@extends('layouts.app')
@section('content')
 <div class="col-12">
            <h1 class="p-3 border text-center my-3">Edit Project Info</h1>
        </div>
        <div class="col-8 mx-auto">
            <form action="{{ url('projects/'.$project->id) }}" method="POST" class="form border p-3">
                @csrf
                @method('PUT')
                  @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
                <div class="mb-3">
                    <label for="title" class="form-label">Project Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}" />
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Project Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"> {{ $project->description }}</textarea>
                </div>
            
                <input type="submit" value="Edit Project" class="btn btn-primary"/>
            </form>
         
        </div>
        @endsection