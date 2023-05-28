<div>
   <x-taskmanager::btn.basic x-data x-on:click="$dispatch('open-modal')" text="New Task"/>
    <x-taskmanager::display-grid>
    <div>
        <x-taskmanager::text.text-3xl display="Task Today"/>
        <x-taskmanager::elements.line/>
        <x-taskmanager::elements.container>
            @foreach ($allTask as $task)
            {{-- todo fetch from enum --}}
            @if ($task->task_groups_name === "TASKS TODAY")
             {{ $task->id }}
            {{ $task->task_groups_name }}
                <x-taskmanager::text.text-medium :display="$task->name"/>
                <x-taskmanager::text.text-medium :display="$task->description"/>
            @endif
            @endforeach
        </x-taskmanager::elements.container>
    </div> 
   
    <div>
        <x-taskmanager::text.text-3xl display="Task Tomorrow"/>
        <x-taskmanager::elements.line/>
        <x-taskmanager::elements.container>
            @foreach ($allTask as $task)
            @if ($task->task_groups_name === "TASKS TOMORROW")
             {{ $task->id }}
            {{ $task->task_groups_name }}
                <x-taskmanager::text.text-medium :display="$task->name"/>
                <x-taskmanager::text.text-medium :display="$task->description"/>
            @endif
            @endforeach
        </x-taskmanager::elements.container>
    </div>
    <div>
        <x-taskmanager::text.text-3xl display="Task Next Week"/>
        <x-taskmanager::elements.line/>
        <x-taskmanager::elements.container>
            <x-taskmanager::text.text-medium display="this is the content of the task"/>
        </x-taskmanager::elements.container>
    </div>

    </x-taskmanager::display-grid>
   <x-taskmanager::pages.create-task :groups="$groups"/>
</div>
