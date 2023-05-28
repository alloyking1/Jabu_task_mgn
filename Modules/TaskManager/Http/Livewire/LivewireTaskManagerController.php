<?php

namespace Modules\TaskManager\Http\Livewire;

use Livewire\Component;
use Modules\TaskManager\Services\TaskManagerService;

class LivewireTaskManagerController extends Component
{
    protected $taskManagerService;

    public $name;
    public $description;
    public $duration_start;
    public $duration_end;
    public $frequency;
    public $status;
    public $task_groups_id;

    public function boot()
    {
        $this->taskManagerService = app(TaskManagerService::class);
    }

    public function create()
    {

        $result =  $this->taskManagerService->create([
            'name' => $this->name,
            'description' => $this->description,
            'duration_start' => $this->duration_start,
            'duration_end' => $this->duration_end,
            'frequency' => $this->frequency,
            'task_groups_id' => $this->task_groups_id
        ]);
        dump($result);
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
            'groups' => $this->taskManagerService->allTaskGroup(),
            'allTask' => $this->taskManagerService->fetTasks('task_today')
        ]);
    }
}
