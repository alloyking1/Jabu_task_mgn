@props([
  'name',
  'description',
  'id'
]);

<div class="fixed inset-0 bg-gray-600 bg-opacity-20 overflow-y-auto h-full w-full flex items-center justify-center">
  <div class="bg-white rounded-md w-full max-w-2xl p-6 m-6">
      <div class="flex justify-between">
          <x-taskmanager::text.text-3xl display="{{ $name }}"/>
          <a href="#" wire:click="toggleDiv">X</a>
      </div>
      <x-taskmanager::elements.line/>
      <x-taskmanager::text.text-medium display="{{ $description }}"/>
      <div class="flex justify-end">
          <a href="#" class="border border-gray-500 text-grey-500 p-2 rounded-md">Edit</a>
          <a wire:click="delete({{ $id }})" href="#" class="border bg-red-500 text-white p-2 rounded-md">Delete</a>
      </div>
  </div>
</div>