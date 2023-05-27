@props([
    'display'
])

<p {{ $attributes->merge(['class' => 'text-md font-thin']) }}>{{ $display }}</p>
