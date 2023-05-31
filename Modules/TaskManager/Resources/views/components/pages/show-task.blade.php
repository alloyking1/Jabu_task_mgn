@props([
  'name',
  'description',
  'duration_start',
  'duration_end',
  'frequency',
  'group',
  'status',
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
      <x-taskmanager::elements.line/>
      <x-taskmanager::text.text-medium display="Start date: {{ $duration_start }}"/>
      <x-taskmanager::elements.line/>
      <x-taskmanager::text.text-medium display="End date: {{ $duration_end }}"/>
      <x-taskmanager::elements.line/>
      <x-taskmanager::text.text-medium display="Frequency: {{ $frequency }}"/>
      <x-taskmanager::elements.line/>
      <x-taskmanager::text.text-medium display="{{ $group }}"/>

      <label class="relative inline-flex items-center cursor-pointer">
       
        <input type="checkbox" value="1" class="sr-only peer pt-4" @checked($status) wire:click="updateTaskStatus({{ $id }})">
        
        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none 
        peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer
         dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] 
         after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full 
         after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
        <span class="ml-3 text-md font-semibold text-gray-900">{{ $status? 'done' : 'pending' }}</span>
      </label>

      <div class="flex justify-end">
          <a href="#" wire:click="toggleUpdateDiv({{ $id }})" class="border border-gray-500 text-grey-500 p-2 rounded-md">Edit</a>
          <a wire:click="delete({{ $id }})" href="#" class="border bg-red-500 text-white p-2 rounded-md">Delete</a>
      </div>
  </div>
</div>