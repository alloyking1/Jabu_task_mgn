@props([
  'value'
]);

<x-taskmanager::elements.livewireModal :heading="$value->name" :id="$value->id">
    <div class="mt-4">

        </div>
        <form wire:submit.prevent="update({{ $value->id }})">
    
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
                    @foreach (Modules\TaskManager\Enums\FrequencyEnum::cases() as $frequency )
                        <x-taskmanager::select-options :name="$frequency->value" :value="$frequency"/>
                    @endforeach
                </x-taskmanager::select>
                <x-taskmanager::input-error :messages="$errors->get('frequency')" class="mt-2" />
            </div>
    
            <div class="flex items-center justify-end mt-4">
    
                <x-taskmanager::primary-button class="ml-3">
                    {{ __('update') }}
                </x-taskmanager::primary-button>
            </div>
        </form>
    </div>
</x-taskmanager::elements.livewireModal>
