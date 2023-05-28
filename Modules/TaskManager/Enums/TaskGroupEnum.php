<?php

namespace Modules\TaskManager\Enums;

enum TaskGroupEnum: string
{
    case TASK_TODAY = 'every day';
    case TASK_TOMORROW = 'every monday';
    case TASK_NEXT_WEEK = 'every monday, wednesday and friday';
}
