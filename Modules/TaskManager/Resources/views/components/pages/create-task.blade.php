
@props(['groups'])
<x-taskmanager::elements.modal heading="Create task">
    <x-taskmanager::auth-session-status class="mb-4" :status="session('status')" />

    <div class="mt-4">
 
    </div>
    <form wire:submit.prevent="create">
 
        <!-- name-->
        <div>
            <x-taskmanager::input-label for="name" :value="__('Name')" />
            <x-taskmanager::text-input class="block mt-1 w-full" type="text" wire:model="name" />
            <x-taskmanager::input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
 
        <!-- description -->
         <div class="mt-4">
            <x-taskmanager::input-label for="description" :value="__('Description')" />
            <x-taskmanager::text-area class="block mt-1 w-full" type="text" cols="30" rows=5  wire:model="description"/>
            <x-taskmanager::input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        {{-- /duration from n time to m time --}}
        <div class="mt-4">
            <x-taskmanager::date-input wire:model="duration_start"/>
            <x-taskmanager::date-input  wire:model="duration_end"/>
            <x-taskmanager::input-error :messages="$errors->get('duration_start')" class="mt-2" />
            <x-taskmanager::input-error :messages="$errors->get('duration_end')" class="mt-2" />
        </div>

        {{-- frequency every day every 2 days --}}
        <div class="mt-4">
            <x-taskmanager::input-label for="frequency" :value="__('frequency')" />
            <x-taskmanager::select name="frequency" wire:model="frequency">
                <x-taskmanager::select-options name="Select" value="#"/>
                @foreach (Modules\TaskManager\Enums\FrequencyEnum::cases() as $frequency )
                    <x-taskmanager::select-options :name="$frequency->value" :value="$frequency"/>
                @endforeach
            </x-taskmanager::select>
            <x-taskmanager::input-error :messages="$errors->get('frequency')" class="mt-2" />
        </div>

        {{-- group --}}
        <div class="mt-4">
            <x-taskmanager::input-label for="task_groups_id" :value="__('Group')" />
            <x-taskmanager::select name="task_groups_id" wire:model="task_groups_id">
                <x-taskmanager::select-options name="Select" value="#"/>
                @foreach ($groups as $group )
                    <x-taskmanager::select-options :name="$group->name" :value="$group->id"/>
                @endforeach
            </x-taskmanager::select>
            <x-taskmanager::input-error :messages="$errors->get('task_groups_id')" class="mt-2" />
        </div>
 
        <div class="flex items-center justify-end mt-4">
 
            <x-taskmanager::primary-button class="ml-3">
                {{ __('create') }}
            </x-taskmanager::primary-button>
        </div>
    </form>
 </div>
</x-taskmanager::elements.modal>