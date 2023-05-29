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

    public $showTask;
    public $toggleDiv = false;
    public $toggleUpdateDiv = false;

    public function boot()
    {
        $this->taskManagerService = app(TaskManagerService::class);
    }

    public function create()
    {
        //todo validation to trait
        $validatedData = $this->validate([
            'name' => 'required',
            'description' => 'required|string',
            'duration_start' => 'required',
            'duration_end' => 'required',
            'frequency' => 'required',
            'task_groups_id' => 'required'
        ]);

        $this->taskManagerService->create($validatedData);
        $this->render();
    }

    public function show($id)
    {
        $this->showTask = $this->taskManagerService->showTask($id);
        $this->toggleDiv();
    }

    public function showUpdate($id)
    {
        $data = $this->taskManagerService->showTask($id);
        $this->name = $data->name;
        $this->description = $data->description;
        $this->duration_start = $data->duration_start;
        $this->duration_end = $data->duration_end;
        $this->frequency = $data->frequency;
        $this->status = $data->status;
        $this->task_groups_id = $data->task_groups_id;
    }

    public function update($id)
    {
        //todo validation to trait
        $validatedData = $this->validate([
            'name' => 'required',
            'description' => 'required|string',
            'duration_start' => 'required',
            'duration_end' => 'required',
            'frequency' => 'required',
            'task_groups_id' => 'required'
        ]);
        $this->taskManagerService->update(['id' => $id], $validatedData);
        $this->render();
        $this->toggleUpdateDiv($id);
    }

    public function updateTaskStatus($id)
    {
        $this->taskManagerService->update(['id' => $id], [
            'status' => true,
        ]);
        $this->render();
    }
    public function delete($id)
    {
        // TO DO: flag warning, fix 404 bug
        $this->taskManagerService->delete($id);
        // $this->toggleDiv();
        return $this->render();
    }

    public function render()
    {
        return view('taskmanager::livewire.livewire-task-manager-controller', [
            'groups' => $this->taskManagerService->allTaskGroup(),
            'allTask' => $this->taskManagerService->fetchTasks('task_today'),
        ]);
    }

    public function toggleDiv()
    {
        $this->toggleDiv = !$this->toggleDiv;
    }
    public function toggleUpdateDiv($id = null)
    {
        $this->toggleDiv();
        $this->showUpdate($id);
        $this->toggleUpdateDiv = !$this->toggleUpdateDiv;
    }
}
