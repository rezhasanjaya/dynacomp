@extends('layouts.struct.logged', ['title' => $title . " - " . $moduleName])

@section('content')
    <div class="flex items-center justify-between">
        <div>
            <p class="text-xs font-semibold uppercase tracking-wider text-emerald-600">{{ $moduleName }}</p>
            <h2 class="text-xl font-semibold text-slate-900">{{ $title }}</h2>
        </div>
        <a href="{{ route('project.index') }}" class="rounded-md bg-gray-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-700">Back</a>
    </div>

    <div class="mt-6 rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
        <form method="POST" action="{{ route('project.update', $data->id) }}" class="space-y-4" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label for="project_name" class="text-sm font-semibold text-slate-700">Project Name</label>
                <input id="project_name" name="project_name" type="text" value="{{ old('project_name', $data->project_name) }}" class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-200" placeholder="Project Name" required>
                @error('project_name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="project_category_id" class="text-sm font-semibold text-slate-700">Category</label>
                <select id="project_category_id" name="project_category_id" class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-200" required>
                    <option value="">Select Category</option>
                    @foreach ($category as $item)
                        <option value="{{ $item->id }}" {{ old('project_category_id', $data->project_category_id) == $item->id ? 'selected' : '' }}>
                            {{ $item->category }}
                        </option>
                    @endforeach
                </select>
                @error('project_category_id')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="client_name" class="text-sm font-semibold text-slate-700">Client Name</label>
                <input id="client_name" name="client_name" type="text" value="{{ old('client_name', $data->client_name) }}" class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-200" placeholder="Client Name">
                @error('client_name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="year" class="text-sm font-semibold text-slate-700">Year</label>
                <input id="year" name="year" type="number" min="1900" max="2100" value="{{ old('year', $data->year) }}" class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-200" placeholder="2026">
                @error('year')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="description" class="text-sm font-semibold text-slate-700">Description</label>
                <textarea id="description" name="description" class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-200" placeholder="Project Description">{{ old('description', $data->description) }}</textarea>
                @error('description')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="image" class="text-sm font-semibold text-slate-700">Change Image</label>
                <input id="image" name="image" type="file" accept="image/*" class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2 text-sm file:mr-4 file:rounded-md file:border-0 file:bg-emerald-50 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-emerald-700 hover:file:bg-emerald-100">
                @if ($data->image)
                    <p class="mt-4 text-sm font-semibold text-slate-700">Current Image</p>
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $data->image) }}" alt="Project image" class="h-40 w-64 rounded-lg object-cover ring-1 ring-slate-200">
                    </div>
                @endif
                @error('image')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-end gap-3">
                <a href="{{ route('project.index') }}" class="rounded-md border border-slate-300 px-4 py-2 text-sm font-semibold text-slate-700 hover:border-emerald-400 hover:text-emerald-700">Cancel</a>
                <button type="submit" class="rounded-md bg-emerald-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-emerald-700">Save</button>
            </div>
        </form>
    </div>

@endsection

@section('js')
@endsection
