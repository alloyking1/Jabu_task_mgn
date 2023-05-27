@props([
    'number' => 2
])

<div class="grid grid-cols-{{ $number }} py-8">
    {{ $slot }}
</div>