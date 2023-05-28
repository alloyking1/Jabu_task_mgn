<x-taskmanager::elements.modal heading="Create task">
    <x-taskmanager::auth-session-status class="mb-4" :status="session('status')" />

    <div class="mt-4">
 
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
 
        <!-- name-->
        <div>
            <x-taskmanager::input-label for="email" :value="__('Name')" />
            <x-taskmanager::text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-taskmanager::input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
 
        <!-- description -->
         <div class="mt-4">
            <x-taskmanager::input-label for="body" :value="__('Description')" />
            <x-taskmanager::text-area id="body" class="block mt-1 w-full" type="text" cols="30" rows=5 :value="old('body')" name="body" required/>
            <x-taskmanager::input-error :messages="$errors->get('body')" class="mt-2" />
        </div>

        {{-- /duration from n time to m time --}}
        {{-- <div class="mt-4">
            <x-select name="category_id">
                @foreach ($category as $each )
                    <x-select-options :name="$each->name" :value="$each->id"/>
                @endforeach
            </x-select>
            <x-input-error :messages="$errors->get('category')" class="mt-2" />
        </div> --}}
        <div class="mt-4">
            <x-taskmanager::date-input/>
            <x-taskmanager::date-input/>
        </div>

        {{-- frequency every day every 2 days --}}
        <div class="mt-4">
            <x-taskmanager::input-label for="body" :value="__('frequency')" />
            <x-taskmanager::select name="frequency">
                <x-taskmanager::select-options name="Daily" value="key"/>
                @foreach (Modules\TaskManager\Enums\FrequencyEnum::cases() as $frequency )
                    <x-taskmanager::select-options :name="$frequency->value" :value="$frequency"/>
                @endforeach
            </x-taskmanager::select>
            <x-taskmanager::input-error :messages="$errors->get('category')" class="mt-2" />
        </div>

        {{-- group --}}
        <div class="mt-4">
            <x-taskmanager::input-label for="body" :value="__('Group')" />
            <x-taskmanager::select name="category_id">
                <x-taskmanager::select-options name="Task Today" value="key"/>
            </x-taskmanager::select>
            <x-taskmanager::input-error :messages="$errors->get('category')" class="mt-2" />
        </div>
 
        <div class="flex items-center justify-end mt-4">
 
            <x-taskmanager::primary-button class="ml-3">
                {{ __('create') }}
            </x-taskmanager::primary-button>
        </div>
    </form>
 </div>
</x-taskmanager::elements.modal>