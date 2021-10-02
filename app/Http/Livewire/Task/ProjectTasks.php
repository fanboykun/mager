<?php

namespace App\Http\Livewire\Task;

use Livewire\Component;
use App\Models\Task;

class ProjectTasks extends Component
{
    public function mount()
    {

    }
    
    public function render()
    {
        return view('livewire.task.project-tasks');
    }
}
