@props([
    'pad' => 4
])

<div class="my-{{ $pad }}">
{{ $slot }}
</div>