@extends('layouts.struct.logged', ['title' => 'Dashboard'])

@section('content')
    <div class="flex flex-col p-10 gap-6">
        <section class="flex flex-col gap-2">
            <p class="text-xs font-semibold uppercase tracking-wider text-emerald-600">Dashboard</p>
            <h2 class="text-xl font-semibold text-slate-900">Welcome {{ Auth::user()->name }}</h2>
        </section>

    
    </div>
@endsection
