<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Throwable;

class ArticleCategoryController extends Controller
{
    public function index()
    {
        $title = 'Management';
        $moduleName = 'Article Categories';
        $data = ArticleCategory::all();
        return view('logged.article-category.index', compact('title', 'moduleName', 'data'));
    }

    public function create()
    {
        $title = 'Add Article Category';
        $moduleName = 'Article Categories';
        return view('logged.article-category.create', compact('title', 'moduleName'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
        ]);

        try {
            ArticleCategory::create([
                'uuid' => Str::uuid(),
                'category' => $request->category,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } catch (Throwable $e) {
            return redirect()
                ->route('article-categories.index')
                ->with('error', 'Failed to create article category.');
        }

        return redirect()
            ->route('article-categories.index')
            ->with('success', 'Article category created successfully.');
    }

    public function edit($uuid)
    {
        $title = 'Edit Article Category';
        $moduleName = 'Article Categories';
        $data = ArticleCategory::where('uuid', $uuid)->first();
        return view('logged.article-category.edit', compact('title', 'moduleName', 'data'));
    }

    public function update(Request $request, $uuid)
    {
        $request->validate([
            'category' => 'required|string|max:255',
        ]);

        try {
            $item = ArticleCategory::where('uuid', $uuid)->first();
            if (!$item) {
                return redirect()
                    ->route('article-categories.index')
                    ->with('error', 'Article category not found.');
            }

            $item->update([
                'category' => $request->category,
                'updated_at' => now(),
            ]);
        } catch (Throwable $e) {
            return redirect()
                ->route('article-categories.index')
                ->with('error', 'Failed to update article category.');
        }

        return redirect()
            ->route('article-categories.index')
            ->with('success', 'Article category updated successfully.');
    }

    public function destroy($uuid)
    {
        try {
            $item = ArticleCategory::where('uuid', $uuid)->first();
            if (!$item) {
                return redirect()
                    ->route('article-categories.index')
                    ->with('error', 'Article category not found.');
            }

            $item->delete();
        } catch (Throwable $e) {
            return redirect()
                ->route('article-categories.index')
                ->with('error', 'Failed to delete article category.');
        }

        return redirect()
            ->route('article-categories.index')
            ->with('success', 'Article category deleted successfully.');
    }

}
