<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Project;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:manage tasks')
            ->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::with('project')
            ->paginate(5);

        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = Project::all();

        return view('tasks.create', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'      => 'required|string|max:255',
            'description' => 'nullable|string',
            'project_id' => 'required|exists:projects,id',
        ]);

        $task = Task::create([
            'title'      => $request->title,
            'description' => $request->description, 
            'project_id' => $request->project_id,
            'is_completed' => false,
        ]);
          activity()
        ->causedBy(auth()->user())
        ->performedOn($task)
        ->withProperties(['title' => $task->title])
        ->log('Created a new task');

        return redirect()->route('tasks.index')
            ->with('success', 'Task created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        $projects = Project::all();

        return view('tasks.edit', compact('task', 'projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $request->validate([
            'title'      => 'required|string|max:255',
            'description' => 'nullable|string',
            'project_id' => 'required|exists:projects,id',
            'is_completed' => 'nullable|boolean',
        ]);

        $task->update([
            'title'        => $request->title,
             'description' => $request->description,
            'project_id'   => $request->project_id,
            'is_completed' => $request->has('is_completed'),
        ]);

          activity()
        ->causedBy(auth()->user())
        ->performedOn($task)
        ->withProperties(['title' => $task->title])
        ->log('Updated the task');

        return redirect()->route('tasks.index')
            ->with('success', 'Task updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

          activity()
        ->causedBy(auth()->user())
        ->performedOn($task)
        ->withProperties(['title' => $task->title])
        ->log('Deleted the task');
        
        return redirect()->route('tasks.index')
            ->with('success', 'Task deleted successfully');
    }
}
