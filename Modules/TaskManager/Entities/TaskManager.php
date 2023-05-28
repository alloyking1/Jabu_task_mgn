<?php

namespace Modules\TaskManager\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TaskManager extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'duration_start', 'duration_end', 'frequency', 'status', 'task_groups_id'];

    protected static function newFactory()
    {
        return \Modules\TaskManager\Database\factories\TaskManagerFactory::new();
    }
}
