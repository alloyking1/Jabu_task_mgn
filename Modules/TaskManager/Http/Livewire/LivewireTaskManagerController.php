<?php

namespace Modules\TaskManager\Http\Livewire;

use Livewire\Component;

class LivewireTaskManagerController extends Component
{

    public function create()
    {
        //taskmanager service
    }

    public function update()
    {
    }

    public function delete()
    {
    }

    public function render()
    {
        // dd('good');
        return view('taskmanager::livewire.livewire-task-manager-controller');
    }
}
