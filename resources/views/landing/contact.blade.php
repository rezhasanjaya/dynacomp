@include('layouts.struct.header')
<div class="min-h-screen bg-slate-100">
    @include('layouts.struct.navguest')

    <section class="mx-auto max-w-6xl px-4 pt-16 pb-10 sm:px-6 lg:px-8">
        <div class="grid gap-10 lg:grid-cols-2 lg:items-center">
            <div>
                <p class="text-sm font-semibold uppercase tracking-wider text-emerald-600">Contact</p>
                <h1 class="mt-3 text-3xl font-bold text-slate-900 sm:text-4xl">Let’s talk about your project</h1>
                <p class="mt-4 text-base text-slate-600">
                    Tell us what you need and we’ll help you shape a clear plan. We usually respond within 24 hours.
                </p>
                <div class="mt-6 space-y-3 text-sm text-slate-600">
                    <p><span class="font-semibold text-slate-900">Email:</span> hello@company.com</p>
                    <p><span class="font-semibold text-slate-900">Phone:</span> +62 812-3456-7890</p>
                    <p><span class="font-semibold text-slate-900">Office:</span> Jakarta, Indonesia</p>
                </div>
            </div>
            <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                <h2 class="text-lg font-semibold text-slate-900">Send a message</h2>
                <x-alert type="success" :message="session('success')" class="mt-4" />
                <x-alert type="error" :message="session('error')" class="mt-4" />
                <form class="mt-4 space-y-4" method="POST" action="{{ route('contact.store') }}">
                    @csrf
                    <div>
                        <label class="text-sm font-semibold text-slate-700">Full Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-200" placeholder="Your name" required>
                        @error('name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="text-sm font-semibold text-slate-700">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-200" placeholder="you@email.com" required>
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="text-sm font-semibold text-slate-700">Project Type</label>
                        <select name="project_type" class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-200" required>
                            <option value="">Select</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->category }}" {{ old('project_type') === $cat->category ? 'selected' : '' }}>
                                    {{ $cat->category }}
                                </option>
                            @endforeach
                        </select>
                        @error('project_type')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="text-sm font-semibold text-slate-700">Message</label>
                        <textarea rows="4" name="message" class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-200" placeholder="Tell us about your project..." required>{{ old('message') }}</textarea>
                        @error('message')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="w-full rounded-md bg-emerald-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-emerald-700">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-4 pb-20 sm:px-6 lg:px-8">
        <div class="grid gap-6 sm:grid-cols-3">
            <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                <h3 class="text-lg font-semibold text-slate-900">Quick Response</h3>
                <p class="mt-2 text-sm text-slate-600">We reply within 24 hours on business days.</p>
            </div>
            <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                <h3 class="text-lg font-semibold text-slate-900">Clear Scope</h3>
                <p class="mt-2 text-sm text-slate-600">We’ll confirm timeline, budget, and deliverables.</p>
            </div>
            <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                <h3 class="text-lg font-semibold text-slate-900">Free Consultation</h3>
                <p class="mt-2 text-sm text-slate-600">Initial discussion is free, no commitment.</p>
            </div>
        </div>
    </section>
</div>
@include('layouts.struct.footer')
