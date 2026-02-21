@extends('layouts.struct.logged', ['title' => $title . " - " . $moduleName])

@section('content')
    <div class="flex items-center justify-between">
        <div>
            <p class="text-xs font-semibold uppercase tracking-wider text-emerald-600">{{ $moduleName }}</p>
            <h2 class="text-xl font-semibold text-slate-900">{{ $title }}</h2>
        </div>
        <a href="{{ route('article-categories.index') }}" class="rounded-md bg-gray-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-700">Back</a>
    </div>

    <div class="mt-6 rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
        <form method="POST" action="{{ route('article-categories.update', $data->uuid) }}" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="category" class="text-sm font-semibold text-slate-700">Category</label>
                <input id="category" name="category" type="text" value="{{ old('category', $data->category) }}" class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-200" placeholder="Category Name" required>
                @error('category')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex items-center justify-end gap-3">
                <a href="{{ route('article-categories.index') }}" class="rounded-md border border-slate-300 px-4 py-2 text-sm font-semibold text-slate-700 hover:border-emerald-400 hover:text-emerald-700">Cancel</a>
                <button type="submit" class="rounded-md bg-emerald-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-emerald-700">Save</button>
            </div>
        </form>
    </div>

@endsection

@section('js')
@endsection
