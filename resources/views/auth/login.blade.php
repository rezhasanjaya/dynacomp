@include('layouts.struct.header', ['title' => 'Login'])
<div class="min-h-screen bg-slate-100">

    <div class="mx-auto flex min-h-[70vh] max-w-6xl items-center px-4 py-12 sm:px-6 lg:px-8">
        <div class="grid w-full gap-10 lg:grid-cols-2 lg:items-center">
            <div>
                <p class="text-sm font-semibold uppercase tracking-wider text-emerald-600">Welcome back</p>
                <h1 class="mt-3 text-3xl font-bold text-slate-900 sm:text-4xl">Log in to CMS</h1>
                <p class="mt-4 text-base text-slate-600">Content Management System.</p>
                {{-- <div class="mt-6 grid grid-cols-2 gap-4">
                    <div class="rounded-xl bg-white p-4 shadow-sm ring-1 ring-slate-200">
                        <p class="text-xs font-semibold uppercase text-emerald-600">Secure</p>
                        <p class="mt-2 text-sm text-slate-600">Protected with modern security practices.</p>
                    </div>
                    <div class="rounded-xl bg-white p-4 shadow-sm ring-1 ring-slate-200">
                        <p class="text-xs font-semibold uppercase text-emerald-600">Fast</p>
                        <p class="mt-2 text-sm text-slate-600">Lightweight and optimized for speed.</p>
                    </div>
                </div> --}}
            </div>

            <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200 sm:p-8">
                <h2 class="text-lg font-semibold text-slate-900">Sign in</h2>
                <p class="mt-1 text-sm text-slate-600">Please enter your credentials.</p>

                <!-- Session Status -->
                <x-auth-session-status class="mt-4" :status="session('status')" />

                <form class="mt-6 space-y-4" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div>
                        <label for="email" class="text-sm font-semibold text-slate-700">Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-200" placeholder="you@email.com">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div>
                        <label for="password" class="text-sm font-semibold text-slate-700">Password</label>
                        <input id="password" type="password" name="password" required autocomplete="current-password" class="mt-2 w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-200" placeholder="Your password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <button type="submit" class="w-full rounded-md bg-emerald-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-emerald-700">
                        {{ __('Log in') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
