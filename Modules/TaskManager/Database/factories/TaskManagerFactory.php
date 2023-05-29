<?php

namespace Modules\TaskManager\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskManagerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\TaskManager\Entities\TaskManager::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}

