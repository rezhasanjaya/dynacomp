@extends('layouts.struct.logged', ['title' => $title . " - " . $moduleName])

@section('content')
    <div class="flex items-center justify-between">
        <div>
            <p class="text-xs font-semibold uppercase tracking-wider text-emerald-600">{{ $moduleName }}</p>
            <h2 class="text-xl font-semibold text-slate-900">{{ $title }}</h2>
        </div>
    </div>

    <x-alert type="success" :message="session('success')" class="mt-4" />
    <x-alert type="error" :message="session('error')" class="mt-4" />

    <div class="mt-6 rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
        <table id="table" class="display w-full text-sm">
            <thead>
                <tr>
                    <th style="width:48px">#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Project Type</th>
                    <th>Created</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td></td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->project_type ?? '-' }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td class="text-right">
                        <a href="{{ route('contact-messages.show', $item->id) }}" class="inline-flex items-center rounded-md border border-emerald-200 px-3 py-1 text-xs font-semibold text-emerald-700 hover:border-emerald-300 hover:text-emerald-800">View</a>
                        <form method="POST" action="{{ route('contact-messages.destroy', $item->id) }}" class="ml-2 inline js-delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="inline-flex items-center rounded-md border border-red-200 px-3 py-1 text-xs font-semibold text-red-700 hover:border-red-300 hover:text-red-800 js-delete-trigger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <x-confirm-delete-modal
        id="deleteModal"
        title="Delete this message?"
        message="This action cannot be undone."
        confirm-id="confirmDelete"
        cancel-id="cancelDelete"
    />
@endsection

@section('js')
    @include('layouts.struct.plugin')
    <script>
        $(function () {
            const table = $('#table').DataTable({
                pageLength: 8,
                order: [[1, 'asc']],
                columnDefs: [
                    { orderable: false, targets: [0, 5] },
                    { searchable: false, targets: [0] }
                ]
            });

            table.on('order.dt search.dt draw.dt', function () {
                let i = 1;
                table.column(0, { search: 'applied', order: 'applied' }).nodes().each(function (cell) {
                    cell.innerHTML = i++;
                });
            }).draw();
        });
    </script>
    <script>
        (function () {
            const modal = document.getElementById('deleteModal');
            const cancelBtn = document.getElementById('cancelDelete');
            const confirmBtn = document.getElementById('confirmDelete');
            let targetForm = null;

            document.addEventListener('click', function (e) {
                if (e.target.classList.contains('js-delete-trigger')) {
                    targetForm = e.target.closest('form');
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                }
            });

            function closeModal() {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                targetForm = null;
            }

            cancelBtn.addEventListener('click', closeModal);
            modal.addEventListener('click', function (e) {
                if (e.target === modal) closeModal();
            });
            confirmBtn.addEventListener('click', function () {
                if (targetForm) targetForm.submit();
            });
        })();
    </script>
@endsection
