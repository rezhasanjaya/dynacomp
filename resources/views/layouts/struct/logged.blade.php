@include('layouts.struct.header', ['title' => $title ?? 'Dashboard'])
@php($user = Auth::user())
<div class="min-h-screen bg-slate-100">
    <div class="flex min-h-screen">
        <aside class="w-64 flex-col border-r border-slate-200 bg-white px-4 py-6 flex">
            <div class="flex items-center gap-3 px-2">
    
                <div>
                    <p class="text-sm font-semibold text-slate-900">DynaComp</p>
                    <p class="text-xs text-slate-500">{{ $user->name }}</p>
                </div>
            </div>

            @include('layouts.struct.side')

            <div class="mt-auto mt-10 space-y-4">
               
                <div class="rounded-xl bg-white p-4 shadow-sm ring-1 ring-slate-200">
                    <div class="flex items-center gap-3">
                        <div class="h-9 w-20 rounded-full bg-emerald-600 text-white flex items-center justify-center text-sm font-semibold">
                            {{ $user?->name ? strtoupper(substr($user->name, 0, 1)) : 'U' }}
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-slate-900">{{ $user?->name ?? 'User' }}</p>
                            <p class="text-xs text-slate-500">{{ $user?->email ?? 'user@email.com' }}</p>
                        </div>
                    </div>
                    <form class="mt-4" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full rounded-md border border-slate-300 px-3 py-2 text-xs font-semibold text-slate-700 hover:border-emerald-400 hover:text-emerald-700">Logout</button>
                    </form>
                </div>
            </div>
        </aside>

        <div class="flex-1">
            <main class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
                @yield('content')
            </main>
        </div>
    </div>
</div>
@yield('js')

