<?php

namespace App\Http\Livewire\Project;

use App\Models\Project;
use Livewire\Component;

class ProjectOngoing extends Component
{
    public $ongoing_project;

    public function render()
    {
        $this->ongoing_project = Project::whereNull('finished_at')->where('last_task_completed_at', '<', 'finished_at')->get();
        return view('livewire.project.project-ongoing');
    }
}
