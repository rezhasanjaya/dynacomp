@include('layouts.struct.header')
<div class="min-h-screen bg-slate-100">
    @include('layouts.struct.navguest')

    <section class="mx-auto max-w-6xl px-4 pt-16 pb-12 sm:px-6 lg:px-8">
        <div class="grid gap-10 lg:grid-cols-2 lg:items-center">
            <div>
                <p class="text-sm font-semibold uppercase tracking-wider text-emerald-600">Services</p>
                <h1 class="mt-3 text-3xl font-bold text-slate-900 sm:text-4xl">
                    End-to-end web services to grow your business
                </h1>
                <p class="mt-4 text-base text-slate-600">
                    From strategy and UI/UX to development and maintenance, we deliver websites that
                    load fast, look modern, and convert visitors into customers.
                </p>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="{{ route('home') }}#portfolio" class="inline-flex items-center rounded-md border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 hover:border-emerald-400 hover:text-emerald-700">See Portfolio</a>
                </div>
            </div>
            <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="rounded-xl bg-slate-50 p-4">
                        <p class="text-sm font-semibold text-slate-900">Delivery</p>
                        <p class="mt-2 text-2xl font-bold text-emerald-600">2-6 Weeks</p>
                    </div>
                    <div class="rounded-xl bg-slate-50 p-4">
                        <p class="text-sm font-semibold text-slate-900">Support</p>
                        <p class="mt-2 text-2xl font-bold text-emerald-600">24/7</p>
                    </div>
                    <div class="rounded-xl bg-slate-50 p-4">
                        <p class="text-sm font-semibold text-slate-900">Stack</p>
                        <p class="mt-2 text-sm font-semibold text-slate-700">Laravel, Tailwind, Vite</p>
                    </div>
                    <div class="rounded-xl bg-slate-50 p-4">
                        <p class="text-sm font-semibold text-slate-900">Quality</p>
                        <p class="mt-2 text-sm font-semibold text-slate-700">SEO Ready + Fast</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-4 pb-12 sm:px-6 lg:px-8">
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($data as $item)
                <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                    <p class="text-xs font-semibold uppercase text-emerald-600">{{ $loop->iteration }}</p>
                    <h3 class="mt-2 text-lg font-semibold text-slate-900">{{ $item->category }}</h3>
                <p class="mt-2 text-sm text-slate-600">{{ $item->description }}</p>
            </div>
            @endforeach
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-4 pb-14 sm:px-6 lg:px-8">
        <div class="rounded-2xl bg-white p-8 shadow-sm ring-1 ring-slate-200">
            <div class="grid gap-6 md:grid-cols-3">
                <div>
                    <p class="text-xs font-semibold uppercase text-slate-500">Process</p>
                    <h3 class="mt-2 text-xl font-semibold text-slate-900">Simple & Transparent</h3>
                </div>
                <div class="md:col-span-2 grid gap-4 sm:grid-cols-3">
                    <div class="rounded-xl bg-slate-50 p-4">
                        <p class="text-sm font-semibold text-slate-900">Discover</p>
                        <p class="mt-2 text-xs text-slate-600">Brief, goals, and scope.</p>
                    </div>
                    <div class="rounded-xl bg-slate-50 p-4">
                        <p class="text-sm font-semibold text-slate-900">Design</p>
                        <p class="mt-2 text-xs text-slate-600">UI/UX, prototype, feedback.</p>
                    </div>
                    <div class="rounded-xl bg-slate-50 p-4">
                        <p class="text-sm font-semibold text-slate-900">Build</p>
                        <p class="mt-2 text-xs text-slate-600">Development and launch.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-4 pb-20 sm:px-6 lg:px-8">
        <div class="rounded-2xl bg-slate-900 px-6 py-10 text-white sm:px-10">
            <div class="grid gap-6 lg:grid-cols-2 lg:items-center">
                <div>
                    <h2 class="text-2xl font-semibold">Ready to start?</h2>
                    <p class="mt-2 text-sm text-slate-300">
                        Tell us about your project and we’ll respond within 24 hours.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3 lg:justify-end">
                    <a href="{{ route('contact') }}" class="inline-flex items-center rounded-md bg-emerald-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-emerald-700">Contact Us</a>
                    <a href="{{ route('home') }}#portfolio" class="inline-flex items-center rounded-md border border-white/30 px-4 py-2 text-sm font-semibold text-white hover:border-emerald-400 hover:text-emerald-300">View Work</a>
                </div>
            </div>
        </div>
    </section>
</div>
@include('layouts.struct.footer')
