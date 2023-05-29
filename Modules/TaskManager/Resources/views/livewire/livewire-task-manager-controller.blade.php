<div>
   <x-taskmanager::btn.basic x-data x-on:click="$dispatch('open-modal')" text="New Task"/>
    <x-taskmanager::display-grid>
    <div>
        <x-taskmanager::text.text-3xl display="Task Today"/>
        <x-taskmanager::elements.line/>
        <x-taskmanager::elements.container>
            @foreach ($allTask as $task)
            {{-- todo fetch from enum --}}
            @if ($task->task_groups_name === "TASKS TODAY" && $task->status != true)
                <a href="#" wire:click="show({{ $task->id }})">
                    <x-taskmanager::text.text-medium class="font-semibold text-xl" :display="$task->name"/>
                    <x-taskmanager::text.text-sm class="" :display="$task->description"/>
                    
                </a>
                <x-taskmanager::elements.line/>
            @endif
            @endforeach
        </x-taskmanager::elements.container>
    </div> 
   
    <div>
        <x-taskmanager::text.text-3xl display="Task Tomorrow"/>
        <x-taskmanager::elements.line/>
        <x-taskmanager::elements.container>
            @foreach ($allTask as $task)
            @if ($task->task_groups_name === "TASKS TOMORROW" && $task->status != true)
                <a href="#" wire:click="show({{ $task->id }})">
                    <x-taskmanager::text.text-medium class="font-semibold text-xl" :display="$task->name"/>
                    <x-taskmanager::text.text-sm class="" :display="$task->description"/>
                </a>
            <x-taskmanager::elements.line/>
            @endif
            @endforeach
        </x-taskmanager::elements.container>
    </div>

    <div class="mt-4">
        <x-taskmanager::text.text-3xl display="Task Next Week"/>
        <x-taskmanager::elements.line/>
        <x-taskmanager::elements.container>
            @foreach ($allTask as $task)
            @if ($task->task_groups_name === "TASKS NEXT WEEK" && $task->status != true)
                <a href="#" wire:click="show({{ $task->id }})">
                    <x-taskmanager::text.text-medium class="font-semibold text-xl" :display="$task->name"/>
                    <x-taskmanager::text.text-sm class="" :display="$task->description"/>
                </a>
            <x-taskmanager::elements.line/>
            @endif
            @endforeach
        </x-taskmanager::elements.container>
    </div>

    @if ($toggleDiv)
        <x-taskmanager::pages.show-task 
        :name="$showTask->name" 
        :description="$showTask->description" 
        :id="$showTask->id"
        :duration_start="$showTask->duration_start"
        :duration_end="$showTask->duration_end"
        :frequency="$showTask->frequency"
        :group="$showTask->group"
        :status="$showTask->status"
        />
    @endif
    @if ($toggleUpdateDiv)
        <x-taskmanager::pages.edit-task :value="$showTask"/>
    @endif

    </x-taskmanager::display-grid>
   <x-taskmanager::pages.create-task :groups="$groups"/>
</div>
