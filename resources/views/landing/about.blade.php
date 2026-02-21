@include('layouts.struct.header')
<div class="min-h-screen bg-slate-100">
    @include('layouts.struct.navguest')

    <section class="mx-auto max-w-6xl px-4 pt-16 pb-12 sm:px-6 lg:px-8">
        <div class="grid gap-10 lg:grid-cols-2 lg:items-center">
            <div>
                <p class="text-sm font-semibold uppercase tracking-wider text-emerald-600">About Us</p>
                <h1 class="mt-3 text-3xl font-bold text-slate-900 sm:text-4xl">
                    We build modern web experiences for growing companies
                </h1>
                <p class="mt-4 text-base text-slate-600">
                    Comp helps brands craft clean, fast, and conversion-focused websites. Our team blends
                    strategy, design, and engineering to deliver digital products that feel simple to use
                    and powerful to grow.
                </p>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="{{ route('contact') }}" class="inline-flex items-center rounded-md bg-emerald-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-emerald-700">Start a Project</a>
                    <a href="{{ route('home') }}#portfolio" class="inline-flex items-center rounded-md border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 hover:border-emerald-400 hover:text-emerald-700">View Portfolio</a>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                <div class="h-56 w-full rounded-xl bg-gradient-to-br from-emerald-100 via-slate-100 to-emerald-200">
                    <div class="h-full w-full bg-[radial-gradient(circle_at_top,_rgba(16,185,129,0.25),_transparent_60%)]"></div>
                </div>
                <div class="mt-6 grid grid-cols-3 gap-4 text-center">
                    <div class="rounded-xl bg-slate-50 p-4">
                        <p class="text-2xl font-bold text-slate-900">120+</p>
                        <p class="mt-1 text-xs font-semibold text-slate-600">Projects</p>
                    </div>
                    <div class="rounded-xl bg-slate-50 p-4">
                        <p class="text-2xl font-bold text-slate-900">8+ yrs</p>
                        <p class="mt-1 text-xs font-semibold text-slate-600">Experience</p>
                    </div>
                    <div class="rounded-xl bg-slate-50 p-4">
                        <p class="text-2xl font-bold text-slate-900">30+</p>
                        <p class="mt-1 text-xs font-semibold text-slate-600">Clients</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-4 pb-14 sm:px-6 lg:px-8">
        <div class="grid gap-6 md:grid-cols-3">
            <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                <h3 class="text-lg font-semibold text-slate-900">Strategy First</h3>
                <p class="mt-2 text-sm text-slate-600">
                    We translate goals into clear digital roadmaps that prioritize impact and clarity.
                </p>
            </div>
            <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                <h3 class="text-lg font-semibold text-slate-900">Design That Works</h3>
                <p class="mt-2 text-sm text-slate-600">
                    Clean UI, thoughtful UX, and brand consistency that builds trust quickly.
                </p>
            </div>
            <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                <h3 class="text-lg font-semibold text-slate-900">Built to Scale</h3>
                <p class="mt-2 text-sm text-slate-600">
                    Solid engineering and performance-first builds that grow with your business.
                </p>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-4 pb-20 sm:px-6 lg:px-8">
        <div class="rounded-2xl bg-slate-900 px-6 py-10 text-white sm:px-10">
            <div class="grid gap-6 lg:grid-cols-2 lg:items-center">
                <div>
                    <h2 class="text-2xl font-semibold">Let’s build something great together</h2>
                    <p class="mt-2 text-sm text-slate-300">
                        Share your idea and we’ll help shape it into a product your customers love.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3 lg:justify-end">
                    <a href="{{ route('contact') }}" class="inline-flex items-center rounded-md bg-emerald-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-emerald-700">Contact Us</a>
                    <a href="{{ route('services') }}" class="inline-flex items-center rounded-md border border-white/30 px-4 py-2 text-sm font-semibold text-white hover:border-emerald-400 hover:text-emerald-300">See Services</a>
                </div>
            </div>
        </div>
    </section>
</div>
@include('layouts.struct.footer')
