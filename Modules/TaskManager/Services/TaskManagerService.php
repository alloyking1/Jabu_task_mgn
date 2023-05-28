<?php

namespace Modules\TaskManager\Services;

use Modules\TaskManager\Entities\TaskGroup;

class TaskManagerService
{

    public function create()
    {
    }

    public function allTaskGroup()
    {
        return TaskGroup::all();
    }
}
