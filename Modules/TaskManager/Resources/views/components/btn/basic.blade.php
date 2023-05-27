@props([
    'text',
    'link' => '#'
])

<div class="">
    <a href="{{ $link }}" {{ $attributes->merge(['class' => 'p-4 rounded-md bg-gray-500 text-white py-2']) }}>{{ $text }}</a>
</div>