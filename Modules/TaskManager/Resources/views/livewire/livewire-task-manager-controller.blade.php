<div>
   <x-taskmanager::btn.basic x-data x-on:click="$dispatch('open-modal')" text="New Task"/>
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

   <x-taskmanager::pages.create-task/>
   <x-taskmanager::pages.create-task/>
</div>
