@props(['heading' => null, 'key'])
<div 
class="fixed inset-0 bg-gray-600 bg-opacity-20 overflow-y-auto h-full w-full flex items-center justify-center"
x-data="{open: false}"
x-show="open"
x-on:open-modal.window="open = true"
>
    <div class="bg-white rounded-md w-full max-w-2xl p-6 m-6"
    x-on:click.outside="open = false">
        <div class="flex justify-between">
            <x-taskmanager::text.text-3xl display="{{ $heading }}"/>
            <a href="#" x-on:click="open = false">X</a>
        </div>
        
        <x-taskmanager::elements.line/>
        <x-taskmanager::elements.container>
            {{ $slot }}
        </x-taskmanager::elements.container>
       
    </div>
</div>