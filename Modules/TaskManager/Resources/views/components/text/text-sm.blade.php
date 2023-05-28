@props([
    'display'
])

<p {{ $attributes->merge(['class' => 'text-xs font-thin']) }}>{{ $display }}</p>
