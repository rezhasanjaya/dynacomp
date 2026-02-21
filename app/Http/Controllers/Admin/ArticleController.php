<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Throwable;

class ArticleController extends Controller
{
    public function index()
    {
        $title = 'Management';
        $moduleName = 'Article';
        $data = Article::with('category')->get();
        return view('logged.article.index', compact('title', 'moduleName', 'data'));
    }

    public function create()
    {
        $title = 'Add Article';
        $moduleName = 'Article';
        $category = ArticleCategory::all();
        return view('logged.article.create', compact('title', 'moduleName', 'category'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'article_category_id' => 'required|exists:article_categories,id',
            'content' => 'nullable|string',
            'author' => 'nullable|string|max:255',
            'published_date' => 'nullable|date',
            'image' => 'nullable|image|max:2048',
        ]);

        try {
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('articles', 'public');
            }

            Article::create([
                'uuid' => (string) Str::uuid(),
                'article_category_id' => $request->article_category_id,
                'title' => $request->title,
                'content' => $request->content,
                'author' => $request->author,
                'published_date' => $request->published_date,
                'image' => $imagePath,
            ]);
        } catch (Throwable $e) {
            return redirect()
                ->route('article.index')
                ->with('error', 'Failed to create article.');
        }

        return redirect()
            ->route('article.index')
            ->with('success', 'Article created successfully.');
    }

    public function edit($id)
    {
        $title = 'Edit Article';
        $moduleName = 'Article';
        $data = Article::findOrFail($id);
        $category = ArticleCategory::all();
        return view('logged.article.edit', compact('title', 'moduleName', 'data', 'category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'article_category_id' => 'required|exists:article_categories,id',
            'content' => 'nullable|string',
            'author' => 'nullable|string|max:255',
            'published_date' => 'nullable|date',
            'image' => 'nullable|image|max:2048',
        ]);

        try {
            $item = Article::findOrFail($id);

            $imagePath = $item->image;
            if ($request->hasFile('image')) {
                if ($imagePath) {
                    Storage::disk('public')->delete($imagePath);
                }
                $imagePath = $request->file('image')->store('articles', 'public');
            }

            $item->update([
                'article_category_id' => $request->article_category_id,
                'title' => $request->title,
                'content' => $request->content,
                'author' => $request->author,
                'published_date' => $request->published_date,
                'image' => $imagePath,
            ]);
        } catch (Throwable $e) {
            return redirect()
                ->route('article.index')
                ->with('error', 'Failed to update article.');
        }

        return redirect()
            ->route('article.index')
            ->with('success', 'Article updated successfully.');
    }

    public function destroy($id)
    {
        try {
            $item = Article::findOrFail($id);
            if ($item->image) {
                Storage::disk('public')->delete($item->image);
            }
            $item->delete();
        } catch (Throwable $e) {
            return redirect()
                ->route('article.index')
                ->with('error', 'Failed to delete article.');
        }

        return redirect()
            ->route('article.index')
            ->with('success', 'Article deleted successfully.');
    }
}
