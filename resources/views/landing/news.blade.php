@include('layouts.struct.header')
<div class="min-h-screen bg-slate-100">
    @include('layouts.struct.navguest')

    <section class="mx-auto max-w-6xl px-4 pt-16 pb-10 sm:px-6 lg:px-8">
        <div class="text-center">
            <p class="text-sm font-semibold uppercase tracking-wider text-emerald-600">News & Insights</p>
            <h1 class="mt-3 text-3xl font-bold text-slate-900 sm:text-4xl">Latest Updates from DynaComp</h1>
            <p class="mt-4 text-base text-slate-600">Trends, projects, and tips for building a modern company profile website.</p>
            <p class="mt-4 text-sm text-slate-500">
                Categories: Design, Development, Branding, Strategy, SEO, UX
            </p>
        </div>
    </section>

    <section class="mx-auto mt-6 max-w-6xl px-4 pb-6 sm:px-6 lg:px-8">
        @if ($data->isEmpty())
            <div class="rounded-2xl bg-white p-8 text-center text-sm text-slate-600 shadow-sm ring-1 ring-slate-200">
                No articles yet.
            </div>
        @else
            <div class="grid gap-8 lg:grid-cols-3">
                @foreach ($data as $item)
                    <article class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200">
                        <div class="h-40 w-full bg-slate-100 bg-cover bg-center" style="background-image: url('{{ $item->image ? asset('storage/' . $item->image) : '' }}')"></div>
                        <div class="p-6">
                            <p class="text-xs font-semibold uppercase text-emerald-600">{{ $item->category?->category ?? 'Uncategorized' }}</p>
                            <h3 class="mt-2 text-lg font-semibold text-slate-900">{{ $item->title }}</h3>
                            <p class="mt-2 text-sm text-slate-600">{{ \Illuminate\Support\Str::limit($item->content, 120) }}</p>
                            <div class="mt-4 flex items-center justify-between text-xs text-slate-500">
                                <span>{{ $item->published_date ?? '-' }}</span>
                                <a href="{{ route('articles.read', $item->uuid) }}" class="font-semibold text-emerald-700 hover:text-emerald-800">Read</a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        @endif
    </section>
    
</div>
@include('layouts.struct.footer')
