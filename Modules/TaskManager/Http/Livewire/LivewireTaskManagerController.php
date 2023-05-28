<?php

namespace Modules\TaskManager\Http\Livewire;

use Livewire\Component;
use Modules\TaskManager\Services\TaskManagerService;

class LivewireTaskManagerController extends Component
{

    protected $taskManagerService;

    public function create()
    {
        // $task = $this->TaskManagerService->create();
    }

    public function update()
    {
    }

    public function delete()
    {
    }

    public function render()
    {

        return view('taskmanager::livewire.livewire-task-manager-controller', [
            'groups' => $this->taskManagerService = app(TaskManagerService::class)
        ]);
    }
}
