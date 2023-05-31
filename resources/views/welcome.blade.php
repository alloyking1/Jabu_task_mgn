<x-guest-layout>
    <div class="grid grid-cols-1 place-content-center justify-center content-center items-center p-4">
        <h1 class="text-4xl font-semibold">Task Manager</h1>
        <hr>
        <p class="text-sm text-gray-500 py-4">A test task manager project built with Laravel TALL stack</p>
        <div class="flex">
            <a href="{{ route('login') }}" class="p-2 border border-black rounded-md mr-2">Log in</a>
            <a href="{{ route('register') }}" class="p-2 border bg-slate-600 text-white rounded-md"> Sign up</a>
        </div>
    </div>
</x-guest-layout>
