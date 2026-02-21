@extends('layouts.struct.logged', ['title' => $title . " - " . $moduleName])

@section('content')
    <div class="flex items-center justify-between">
        <div>
            <p class="text-xs font-semibold uppercase tracking-wider text-emerald-600">{{ $moduleName }}</p>
            <h2 class="text-xl font-semibold text-slate-900">{{ $title }}</h2>
        </div>
        <a href="{{ route('contact-messages.index') }}" class="rounded-md bg-gray-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-700">Back</a>
    </div>

    <div class="mt-6 rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
        <div class="grid gap-4 sm:grid-cols-2">
            <div>
                <p class="text-xs font-semibold uppercase text-slate-500">Name</p>
                <p class="mt-1 text-sm font-semibold text-slate-900">{{ $data->name }}</p>
            </div>
            <div>
                <p class="text-xs font-semibold uppercase text-slate-500">Email</p>
                <p class="mt-1 text-sm font-semibold text-slate-900">{{ $data->email }}</p>
            </div>
            <div>
                <p class="text-xs font-semibold uppercase text-slate-500">Project Type</p>
                <p class="mt-1 text-sm font-semibold text-slate-900">{{ $data->project_type ?? '-' }}</p>
            </div>
            <div>
                <p class="text-xs font-semibold uppercase text-slate-500">Submitted</p>
                <p class="mt-1 text-sm font-semibold text-slate-900">{{ $data->created_at }}</p>
            </div>
        </div>
        <div class="mt-6">
            <p class="text-xs font-semibold uppercase text-slate-500">Message</p>
            <div class="mt-2 rounded-lg border border-slate-200 bg-slate-50 p-4 text-sm text-slate-700">
                {!! nl2br(e($data->message)) !!}
            </div>
        </div>
    </div>
@endsection
