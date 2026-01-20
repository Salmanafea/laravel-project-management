@extends('layouts.app')

@section('content')

<div class="col-12">
    <h1 class="p-3 border text-center my-3">Activity Logs</h1>
</div>

<div class="col-12">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>User</th>
                <th>Description</th>
                <th>Log Name</th>
                <th>Date</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($activities as $activity)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ optional($activity->causer)->name ?? 'System' }}</td>
                <td>{{ $activity->description }}</td>
                <td>{{ $activity->log_name }}</td>
                <td>{{ $activity->created_at->format('Y-m-d H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $activities->links() }}

</div>

@endsection
