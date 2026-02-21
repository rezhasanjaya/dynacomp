@include('layouts.struct.header')
<div class="min-h-screen bg-slate-100">
    @include('layouts.struct.navguest')
    <div>
        <div class="mx-auto border-b border-slate-150 px-4 py-16 sm:px-6 lg:px-8">
            <!-- Replace with your content -->
            <div class="px-4 py-6 sm:px-0">
                <div class="min-h-[50vh] flex flex-col items-center justify-center">
                    <h1 class="text-center text-md md:text-3xl font-bold text-gray-800">Build The Dynamic Web For Your Company</h1>
                    <h1 class="text-center text-lg md:text-5xl font-semibold text-emerald-600 mt-3">With US ⌘</h1>
                </div>
            </div>
            <!-- /End replace -->
        </div>
        <section id="portfolio" class="mx-auto p-10">
            <!-- Replace with your content -->
            <div>
                <h1 class="text-center font-bold text-3xl">Our Portfolio</h1>
            </div>
            <div class="mx-auto max-w-6xl px-6 py-12">
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($data as $item)
                    <div class="group overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200 transition hover:-translate-y-1 hover:shadow-lg">
                        <div class="relative h-40 w-full bg-slate-100 bg-cover bg-center" style="background-image: url('{{ $item->image ? asset('storage/' . $item->image) : '' }}')">
                            <div class="absolute inset-0 bg-black/10"></div>
                            <div class="absolute bottom-3 left-3 rounded-full bg-white/80 px-3 py-1 text-xs font-semibold text-emerald-700 backdrop-blur">{{ $item->category->category }}</div>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-semibold text-slate-900">{{ $item->project_name }}</h3>
                            <p class="mt-2 text-sm text-slate-600">{{ $item->description }}</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-medium text-slate-500">{{ $item->year }}</span>
                                {{-- <a class="text-sm font-semibold text-emerald-700 hover:text-emerald-800" href="#">View</a> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    {{-- <div class="group overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200 transition hover:-translate-y-1 hover:shadow-lg">
                        <div class="relative h-40 w-full bg-gradient-to-br from-slate-100 via-emerald-100 to-slate-200">
                            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(15,118,110,0.2),_transparent_55%)]"></div>
                            <div class="absolute bottom-3 left-3 rounded-full bg-white/80 px-3 py-1 text-xs font-semibold text-teal-700 backdrop-blur">Landing Page</div>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-semibold text-slate-900">Project Beta</h3>
                            <p class="mt-2 text-sm text-slate-600">Landing page produk dengan konversi tinggi.</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-medium text-slate-500">2025</span>
                                <a class="text-sm font-semibold text-emerald-700 hover:text-emerald-800" href="#">View</a>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="group overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200 transition hover:-translate-y-1 hover:shadow-lg">
                        <div class="relative h-40 w-full bg-gradient-to-br from-emerald-100 via-slate-100 to-slate-200">
                            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(59,130,246,0.18),_transparent_55%)]"></div>
                            <div class="absolute bottom-3 left-3 rounded-full bg-white/80 px-3 py-1 text-xs font-semibold text-sky-700 backdrop-blur">Dashboard</div>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-semibold text-slate-900">Project Gamma</h3>
                            <p class="mt-2 text-sm text-slate-600">Dashboard admin untuk monitoring bisnis.</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-medium text-slate-500">2024</span>
                                <a class="text-sm font-semibold text-emerald-700 hover:text-emerald-800" href="#">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="group overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200 transition hover:-translate-y-1 hover:shadow-lg">
                        <div class="relative h-40 w-full bg-gradient-to-br from-slate-100 via-emerald-200 to-slate-200">
                            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(234,179,8,0.2),_transparent_55%)]"></div>
                            <div class="absolute bottom-3 left-3 rounded-full bg-white/80 px-3 py-1 text-xs font-semibold text-amber-700 backdrop-blur">Event</div>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-semibold text-slate-900">Project Delta</h3>
                            <p class="mt-2 text-sm text-slate-600">Website event dengan sistem registrasi.</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-medium text-slate-500">2024</span>
                                <a class="text-sm font-semibold text-emerald-700 hover:text-emerald-800" href="#">View</a>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="group overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200 transition hover:-translate-y-1 hover:shadow-lg">
                        <div class="relative h-40 w-full bg-gradient-to-br from-emerald-100 via-slate-100 to-emerald-200">
                            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(236,72,153,0.18),_transparent_55%)]"></div>
                            <div class="absolute bottom-3 left-3 rounded-full bg-white/80 px-3 py-1 text-xs font-semibold text-pink-700 backdrop-blur">Startup</div>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-semibold text-slate-900">Project Epsilon</h3>
                            <p class="mt-2 text-sm text-slate-600">Company profile untuk startup teknologi.</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-medium text-slate-500">2023</span>
                                <a class="text-sm font-semibold text-emerald-700 hover:text-emerald-800" href="#">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="group overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200 transition hover:-translate-y-1 hover:shadow-lg">
                        <div class="relative h-40 w-full bg-gradient-to-br from-slate-100 via-emerald-100 to-slate-200">
                            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(34,197,94,0.2),_transparent_55%)]"></div>
                            <div class="absolute bottom-3 left-3 rounded-full bg-white/80 px-3 py-1 text-xs font-semibold text-emerald-700 backdrop-blur">Marketplace</div>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-semibold text-slate-900">Project Zeta</h3>
                            <p class="mt-2 text-sm text-slate-600">Marketplace sederhana dengan katalog produk.</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-medium text-slate-500">2023</span>
                                <a class="text-sm font-semibold text-emerald-700 hover:text-emerald-800" href="#">View</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <!-- /End replace -->
        </section>
    </div>
</div>
@include('layouts.struct.footer')
