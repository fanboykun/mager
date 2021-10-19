<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Project;

class ProjectAll extends Component
{
    public $all_project;

    public function render()
    {
        $this->all_project = Project::all();
        return view('livewire.project.project-all');
    }
}
