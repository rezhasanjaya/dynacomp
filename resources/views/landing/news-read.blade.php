@include('layouts.struct.header')
<div class="min-h-screen bg-slate-100">
    @include('layouts.struct.navguest')

    <section class="mx-auto max-w-4xl px-4 pt-16 pb-10 sm:px-6 lg:px-8">
        <div class="mb-6">
            <a href="{{ route('articles') }}" class="text-sm font-semibold text-emerald-700 hover:text-emerald-800">← Back to Articles</a>
        </div>

        <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200 sm:p-8">
            <p class="text-xs font-semibold uppercase text-emerald-600">{{ $data->category?->category ?? 'Uncategorized' }}</p>
            <h1 class="mt-2 text-2xl font-bold text-slate-900 sm:text-3xl">{{ $data->title }}</h1>
            <div class="mt-3 flex flex-wrap items-center gap-3 text-xs text-slate-500">
                <span>{{ $data->published_date ?? '-' }}</span>
                <span>•</span>
                <span>{{ $data->author ?? 'DynaComp' }}</span>
            </div>

            @if ($data->image)
                <div class="mt-6 overflow-hidden rounded-xl">
                    <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $data->title }}" class="h-64 w-full object-cover">
                </div>
            @endif

            <div class="prose prose-slate mt-6 max-w-none">
                {!! nl2br(e($data->content)) !!}
            </div>
        </div>
    </section>
</div>
@include('layouts.struct.footer')
