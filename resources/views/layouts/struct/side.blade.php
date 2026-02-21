@php($activeLink = 'flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-semibold text-emerald-700 bg-emerald-50')
@php($inactiveLink = 'flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium text-slate-600 hover:text-emerald-700 hover:bg-emerald-50')

<nav class="mt-10 space-y-1">
    <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? $activeLink : $inactiveLink }}">
        <span>Dashboard</span>
    </a>
    <a href="{{ route('project-categories.index') }}" class="{{ request()->routeIs('project-categories.*') ? $activeLink : $inactiveLink }}">
        <span>Project Categories</span>
    {{-- </a>
    <a href="{{ route('services-master.index') }}" class="{{ request()->routeIs('services-master.*') ? $activeLink : $inactiveLink }}">
        <span>Services</span>
    </a> --}}
    <a href="{{ route('article-categories.index') }}" class="{{ request()->routeIs('article-categories.*') ? $activeLink : $inactiveLink }}">
        <span>Articles Categories</span>
    </a>
    <a href="{{ route('project.index') }}" class="{{ request()->routeIs('project.*') ? $activeLink : $inactiveLink }}">
        <span>Projects</span>
    </a>
    <a href="{{ route('article.index') }}" class="{{ request()->routeIs('article.*') ? $activeLink : $inactiveLink }}">
        <span>Articles</span>
    </a>
    <a href="{{ route('contact-messages.index') }}" class="{{ request()->routeIs('contact-messages.*') ? $activeLink : $inactiveLink }}">
        <span>Contact Message</span>
    </a>
</nav>
