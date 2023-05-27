<?php

namespace Modules\TaskManager\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TaskManager extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\TaskManager\Database\factories\TaskManagerFactory::new();
    }
}
