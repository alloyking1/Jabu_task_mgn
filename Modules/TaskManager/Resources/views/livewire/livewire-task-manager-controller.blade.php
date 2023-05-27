<div>
   <x-taskmanager::btn.basic text="New Task" :link="route('task.create')"/>
    <x-taskmanager::display-grid>
    <div>
        <x-taskmanager::text.text-3xl display="Heading"/>
        <x-taskmanager::elements.line/>
        <x-taskmanager::elements.container>
            <x-taskmanager::text.text-medium display="this is the content of the task"/>
        </x-taskmanager::elements.container>
    </div>
    <div>
        <x-taskmanager::text.text-3xl display="Heading"/>
        <x-taskmanager::elements.line/>
        <x-taskmanager::elements.container>
            <x-taskmanager::text.text-medium display="this is the content of the task"/>
            <x-taskmanager::text.text-medium display="this is the content of the task"/>
            <x-taskmanager::text.text-medium display="this is the content of the task"/>
            <x-taskmanager::text.text-medium display="this is the content of the task"/>
        </x-taskmanager::elements.container>
    </div>

    </x-taskmanager::display-grid>
</div>
