<?php

namespace Modules\TaskManager\Tests\Unit;

use Modules\TaskManager\Entities\TaskManager;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Modules\TaskManager\Http\Livewire\LivewireTaskManagerController;
use Livewire;
use Modules\TaskManager\Entities\TaskGroup;

/** @test */

class LivewireTaskManagerControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Assert it show dashboard.
     *
     * @return void
     */
    public function test_can_show_the_task_manager_dashboard()
    {
        $this->actingAs(User::factory()->create())
            ->get('/dashboard')
            ->assertStatus(200)
            ->assertSeeLivewire('taskmanager::livewire-task-manager-controller');
    }

    public function test_can_validate_create_task_method()
    {
        $this->actingAs(User::factory()->create());
        Livewire::test(LivewireTaskManagerController::class)
            ->set([
                'name' => '',
            ])
            ->call('create')
            ->assertHasErrors(['name' => 'required']);
    }

    public function test_can_create_task()
    {
        $this->actingAs(User::factory()->create());
        Livewire::test(LivewireTaskManagerController::class)
            ->set([
                'name' => fake()->name(),
                'description' => fake()->sentence(10),
                'duration_start' => date('2023-06-01'),
                'duration_end' => date('2023-06-02'),
                'frequency' => 'every day',
                // 'task_groups_id' => TaskGroup::factory()->create()->id,  TODO: fix factory class error
                'task_groups_id' => 1
            ])
            ->call('create')
            ->assertStatus(200);
    }

    public function test_can_validate_update_task_method()
    {
        $this->actingAs(User::factory()->create());
        $task = $this->createTask();

        Livewire::test(LivewireTaskManagerController::class)
            ->set([
                'name' => '',
            ])
            ->call('update', $task->id)
            ->assertHasErrors(['name' => 'required']);
    }

    public function test_can_update_task()
    {
        $this->actingAs(User::factory()->create());
        $task = $this->createTask();

        Livewire::test(LivewireTaskManagerController::class)
            ->set([
                'name' => fake()->name(),
                'description' => fake()->sentence(10),
                'duration_start' => date('2023-06-01'),
            ])
            ->call('update', $task->id)
            ->assertStatus(200);
    }

    public function test_can_delete_task()
    {
        $this->actingAs(User::factory()->create());
        $task = $this->createTask();

        Livewire::test(LivewireTaskManagerController::class)
            ->call('delete', $task->id)
            ->assertStatus(200);
    }

    public function test_can_list_task()
    {

        $this->withoutExceptionHandling();
        $this->actingAs(User::factory()->create());
        $task = $this->createTask();

        Livewire::test(LivewireTaskManagerController::class)
            ->call('render')
            ->assertStatus(200)
            ->assertSee('Task Today');
    }


    public function createTask()
    {
        return TaskManager::factory()->create([
            'name' => fake()->name(),
            'description' => fake()->sentence(10),
            'duration_start' => date('2023-06-01'),
            'duration_end' => date('2023-06-02'),
            'frequency' => 'every day',
            'task_groups_id' => 1
        ]);
    }
}
