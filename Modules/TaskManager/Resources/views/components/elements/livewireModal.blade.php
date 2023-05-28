@props(['heading', 'id'])
<div class="fixed inset-0 bg-gray-600 bg-opacity-20 overflow-y-auto h-full w-full flex items-center justify-center">
    <div class="bg-white rounded-md w-full max-w-2xl p-6 m-6">
        <div class="flex justify-between">
            <x-taskmanager::text.text-3xl display="{{ $heading }}"/>
            <a href="#" wire:click="toggleUpdateDiv({{ $id }})">X</a>
        </div>
        <x-taskmanager::elements.line/>

        {{ $slot }}
    </div>
</div>