@props([
    'type' => 'success',
    'message' => '',
])

@php
    $isSuccess = $type === 'success';
    $classes = $isSuccess
        ? 'border-emerald-200 bg-emerald-50 text-emerald-800'
        : 'border-red-200 bg-red-50 text-red-800';
@endphp

@if ($message)
    <div {{ $attributes->merge(['class' => "rounded-lg border px-4 py-3 text-sm {$classes}"]) }}>
        {{ $message }}
    </div>
@endif
