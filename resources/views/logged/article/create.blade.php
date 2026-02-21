@extends('layouts.struct.logged', ['title' => $title . " - " . $moduleName])

@section('content')
    <div class="flex items-center justify-between">
        <div>
            <p class="text-xs font-semibold uppercase tracking-wider text-emerald-600">{{ $moduleName }}</p>
            <h2 class="text-xl font-semibold text-slate-900">{{ $title }}</h2>
        </div>
        <a href="{{ route('article.index') }}" class="rounded-md bg-gray-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-700">Back</a>
    </div>

    <div class="mt-6 rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
        <form method="POST" action="{{ route('article.store') }}" class="space-y-4" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title" class="text-sm font-semibold text-slate-700">Title</label>
                <input id="title" name="title" type="text" value="{{ old('title') }}" class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-200" placeholder="Article Title" required>
                @error('title')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="article_category_id" class="text-sm font-semibold text-slate-700">Category</label>
                <select id="article_category_id" name="article_category_id" class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-200" required>
                    <option value="">Select Category</option>
                    @foreach ($category as $item)
                        <option value="{{ $item->id }}" {{ old('article_category_id') == $item->id ? 'selected' : '' }}>
                            {{ $item->category }}
                        </option>
                    @endforeach
                </select>
                @error('article_category_id')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="author" class="text-sm font-semibold text-slate-700">Author</label>
                <input id="author" name="author" type="text" value="{{ old('author') }}" class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-200" placeholder="Author Name">
                @error('author')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="published_date" class="text-sm font-semibold text-slate-700">Published Date</label>
                <input id="published_date" name="published_date" type="date" value="{{ old('published_date') }}" class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-200">
                @error('published_date')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="content" class="text-sm font-semibold text-slate-700">Content</label>
                <textarea id="content" name="content" class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-200" placeholder="Article Content">{{ old('content') }}</textarea>
                @error('content')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="image" class="text-sm font-semibold text-slate-700">Image</label>
                <input id="image" name="image" type="file" accept="image/*" class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2 text-sm file:mr-4 file:rounded-md file:border-0 file:bg-emerald-50 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-emerald-700 hover:file:bg-emerald-100">
                @error('image')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-end gap-3">
                <a href="{{ route('article.index') }}" class="rounded-md border border-slate-300 px-4 py-2 text-sm font-semibold text-slate-700 hover:border-emerald-400 hover:text-emerald-700">Cancel</a>
                <button type="submit" class="rounded-md bg-emerald-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-emerald-700">Save</button>
            </div>
        </form>
    </div>
@endsection

@section('js')
@endsection
