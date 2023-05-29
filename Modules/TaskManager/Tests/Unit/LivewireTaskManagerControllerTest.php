<?php

namespace Modules\TaskManager\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

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
        $this->withoutExceptionHandling();
        $this->actingAs(User::factory()->create())
            ->get('/dashboard')
            ->assertStatus(200)
            ->assertSee('Task Today');
    }
}
