<?php

namespace Modules\TaskManager\Services;

use Modules\TaskManager\Entities\TaskManager;
use Modules\TaskManager\Entities\TaskGroup;

class TaskManagerService
{

    public function create(...$data)
    {
        return TaskManager::create($data[0]);
    }

    public function fetchTasks($group = null)
    {
        return TaskManager::leftJoin('task_groups', 'task_groups.id', '=', 'task_managers.task_groups_id')
            ->select('task_managers.*', 'task_groups.name as task_groups_name')->get();
    }

    public function showTask($id)
    {
        return TaskManager::find($id);
    }

    public function delete($id)
    {
        return TaskManager::find($id)->delete();
    }

    public function allTaskGroup()
    {
        return TaskGroup::all();
    }
}
