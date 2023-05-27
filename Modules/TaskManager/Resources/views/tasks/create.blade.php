
<x-taskmanager::layouts.master title="Create Task">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create task') }}
        </h2>
    </x-slot>
<div>
   <!-- Session Status -->
   <x-taskmanager::auth-session-status class="mb-4" :status="session('status')" />

   <div class="mt-4">

   </div>
   <form method="POST" action="{{ route('login') }}">
       @csrf

       <!-- Email Address -->
       <div>
           <x-taskmanager::input-label for="email" :value="__('Email')" />
           <x-taskmanager::text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
           <x-taskmanager::input-error :messages="$errors->get('email')" class="mt-2" />
       </div>

       <!-- Password -->
       <div class="mt-4">
           <x-taskmanager::input-label for="password" :value="__('Password')" />

           <x-taskmanager::text-input id="password" class="block mt-1 w-full"
                           type="password"
                           name="password"
                           required autocomplete="current-password" />

           <x-taskmanager::input-error :messages="$errors->get('password')" class="mt-2" />
       </div>

       <div class="flex items-center justify-end mt-4">

           <x-taskmanager::primary-button class="ml-3">
               {{ __('save') }}
           </x-taskmanager::primary-button>
       </div>
   </form>
</div>
</x-taskmanager::layouts.master>