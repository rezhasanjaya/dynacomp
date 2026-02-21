<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Str;
use Throwable;

class ProjectCategoryController extends Controller
{
    public function index()
    {
        $title = 'Management';
        $moduleName = 'Project Categories';
        $data = ProjectCategory::all();
        return view('logged.project-category.index', compact('title', 'moduleName', 'data'));
    }

    public function create()
    {
        $title = 'Add Project Category';
        $moduleName = 'Project Categories';
        return view('logged.project-category.create', compact('title', 'moduleName'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
        ]);

        try {
            ProjectCategory::create([
                'uuid' => Str::uuid(),
                'category' => $request->category,
                'description' => $request->description,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } catch (Throwable $e) {
            return redirect()
                ->route('project-categories.index')
                ->with('error', 'Failed to create project category.');
        }

        return redirect()
            ->route('project-categories.index')
            ->with('success', 'Project category created successfully.');
    }

    public function edit($uuid)
    {
        $title = 'Edit Project Category';
        $moduleName = 'Project Categories';
        $data = ProjectCategory::where('uuid', $uuid)->first();
        return view('logged.project-category.edit', compact('title', 'moduleName', 'data'));
    }

    public function update(Request $request, $uuid)
    {
        $request->validate([
            'category' => 'required|string|max:255',
        ]);

        try {
            $projectCategory = ProjectCategory::where('uuid', $uuid)->first();
            if (!$projectCategory) {
                return redirect()
                    ->route('project-categories.index')
                    ->with('error', 'Project category not found.');
            }

            $projectCategory->update([
                'category' => $request->category,
                'description' => $request->description,
                'updated_at' => now(),
            ]);
        } catch (Throwable $e) {
            return redirect()
                ->route('project-categories.index')
                ->with('error', 'Failed to update project category.');
        }

        return redirect()
            ->route('project-categories.index')
            ->with('success', 'Project category updated successfully.');
    }

    public function destroy($uuid)
    {
        try {
            $projectCategory = ProjectCategory::where('uuid', $uuid)->first();
            if (!$projectCategory) {
                return redirect()
                    ->route('project-categories.index')
                    ->with('error', 'Project category not found.');
            }

            $projectCategory->delete();
        } catch (Throwable $e) {
            return redirect()
                ->route('project-categories.index')
                ->with('error', 'Failed to delete project category.');
        }

        return redirect()
            ->route('project-categories.index')
            ->with('success', 'Project category deleted successfully.');
    }
}
