<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Project;

class ProjectShow extends Component
{
    public $project;

    public function mount(Project $project)
    {
        $this->project = $project->load('tasks');
    }

    public function render()
    {
        return view('livewire.project.project-show');
    }
}
