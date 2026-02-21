@props([
    'id' => 'deleteModal',
    'title' => 'Hapus data?',
    'message' => 'Tindakan ini tidak bisa dibatalkan.',
    'confirmId' => 'confirmDelete',
    'cancelId' => 'cancelDelete',
])

<div id="{{ $id }}" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40 p-4">
    <div class="w-full max-w-md rounded-2xl bg-white p-6 shadow-lg">
        <h3 class="text-lg font-semibold text-slate-900">{{ $title }}</h3>
        <p class="mt-2 text-sm text-slate-600">{{ $message }}</p>
        <div class="mt-6 flex items-center justify-end gap-3">
            <button type="button" id="{{ $cancelId }}" class="rounded-md border border-slate-300 px-4 py-2 text-sm font-semibold text-slate-700 hover:border-emerald-400 hover:text-emerald-700">Batal</button>
            <button type="button" id="{{ $confirmId }}" class="rounded-md bg-red-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-700">Hapus</button>
        </div>
    </div>
</div>
