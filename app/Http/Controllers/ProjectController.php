<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.project.index', compact('projects'));
    }
    public function create()
    {
        return view('admin.project.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'target_amount' => 'required|numeric|min:0',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'image' => 'nullable|max:2048',
        ]);
        $progress = $this->calculateProgress(0, $request->target_amount);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('projects', 'public');
        }

        $project = new Project();
        $project->name = $request->name;
        $project->description = $request->description;
        $project->target_amount = $request->target_amount;
        $project->current_amount = 0;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->progress = $progress;
        $project->image = $imagePath;
        $project->save();
        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    private function calculateProgress($currentAmount, $targetAmount)
    {
        return ($currentAmount / $targetAmount) * 100;
    }

    public function edit(Project $project)
    {
        return view('admin.project.edit', compact('project'));
    }
    public function update(Request $request, Project $project)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'target_amount' => 'required|numeric|min:0',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'image' => 'nullable|max:2048',
        ]);
        $progress = $this->calculateProgress($project->current_amount, $request->target_amount);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($project->image && \Storage::disk('public')->exists($project->image)) {
                \Storage::disk('public')->delete($project->image);
            }

            // Store new image and update path
            $project->image = $request->file('image')->store('projects', 'public');
        }

        $project->name = $request->name;
        $project->description = $request->description;
        $project->target_amount = $request->target_amount;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->progress = $progress;
        $project->save();
        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
