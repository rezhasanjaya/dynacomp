<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Throwable;

class ProjectController extends Controller
{
    public function index()
    {
        $title = 'Management';
        $moduleName = 'Project';
        $data = Project::all();
        return view('logged.project.index', compact('title', 'moduleName', 'data'));
    }

    public function create()
    {
        $title = 'Add Project';
        $moduleName = 'Project';
        $category = ProjectCategory::all();
        return view('logged.project.create', compact('title', 'moduleName', 'category'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'project_name' => 'required|string|max:255',
            'project_category_id' => 'required|exists:project_categories,id',
            'description' => 'nullable|string',
            'client_name' => 'nullable|string|max:255',
            'year' => 'nullable|integer|min:1900|max:2100',
            'image' => 'nullable|image|max:2048',
        ]);

        try {
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('projects', 'public');
            }

            Project::create([
                'uuid' => (string) Str::uuid(),
                'project_category_id' => $request->project_category_id,
                'project_name' => $request->project_name,
                'description' => $request->description,
                'client_name' => $request->client_name,
                'year' => $request->year,
                'image' => $imagePath,
            ]);
        } catch (Throwable $e) {
            return redirect()
                ->route('project.index')
                ->with('error', 'Failed to create project.');
        }

        return redirect()
            ->route('project.index')
            ->with('success', 'Project created successfully.');
    }

    public function edit($id)
    {
        $title = 'Edit Project';
        $moduleName = 'Project';
        $data = Project::findOrFail($id);
        $category = ProjectCategory::all();
        return view('logged.project.edit', compact('title', 'moduleName', 'data', 'category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'project_name' => 'required|string|max:255',
            'project_category_id' => 'required|exists:project_categories,id',
            'description' => 'nullable|string',
            'client_name' => 'nullable|string|max:255',
            'year' => 'nullable|integer|min:1900|max:2100',
            'image' => 'nullable|image|max:2048',
        ]);

        try {
            $item = Project::findOrFail($id);

            $imagePath = $item->image;
            if ($request->hasFile('image')) {
                if ($imagePath) {
                    Storage::disk('public')->delete($imagePath);
                }
                $imagePath = $request->file('image')->store('projects', 'public');
            }

            $item->update([
                'project_category_id' => $request->project_category_id,
                'project_name' => $request->project_name,
                'description' => $request->description,
                'client_name' => $request->client_name,
                'year' => $request->year,
                'image' => $imagePath,
            ]);
        } catch (Throwable $e) {
            return redirect()
                ->route('project.index')
                ->with('error', 'Failed to update project.');
        }

        return redirect()
            ->route('project.index')
            ->with('success', 'Project updated successfully.');
    }

    public function destroy($id)
    {
        try {
            $item = Project::findOrFail($id);
            if ($item->image) {
                Storage::disk('public')->delete($item->image);
            }
            $item->delete();
        } catch (Throwable $e) {
            return redirect()
                ->route('project.index')
                ->with('error', 'Failed to delete project.');
        }

        return redirect()
            ->route('project.index')
            ->with('success', 'Project deleted successfully.');
    }
}
