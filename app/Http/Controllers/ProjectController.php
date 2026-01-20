<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        // فقط من لديه permission manage projects
        $this->middleware('permission:manage projects');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with('user')
            ->where('user_id', auth()->id())
            ->paginate(5);

        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

       $project =Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => auth()->id(),
        ]);
          activity()
        ->causedBy(auth()->user())
        ->performedOn($project)
        ->withProperties(['title' => $project->title])
        ->log('Created a new project');

        return redirect()->route('projects.index')
            ->with('success', 'Project created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);

     
        if ($project->user_id !== auth()->id()) {
            abort(403);
        }

        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        if ($project->user_id !== auth()->id()) {
            abort(403);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $project->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

          activity()
        ->causedBy(auth()->user())
        ->performedOn($project)
        ->withProperties(['title' => $project->title])
        ->log('Updated the project');
        
        return redirect()->route('projects.index')
            ->with('success', 'Project updated successfully');
    }
    //  * Remove the specified resource from storage.
    //  */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        if ($project->user_id !== auth()->id()) {
            abort(403);
        }

        $project->delete();

            activity()
        ->causedBy(auth()->user())
        ->performedOn($project)
        ->withProperties(['title' => $project->title])
        ->log('Deleted the project');


        return redirect()->route('projects.index')
            ->with('success', 'Project deleted successfully');
    }
}
