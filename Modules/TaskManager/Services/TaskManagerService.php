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

    public function allTaskGroup()
    {
        return TaskGroup::all();
    }
}
