<?php

namespace App\Http\Livewire\Project;

use App\Models\Project;
use Livewire\Component;
use Carbon\Carbon;

class Projects extends Component
{
    public $projects;

    public function render()
    {
        $this->projects = Project::orderByDesc('created_at')->get();
        return view('livewire.project.projects');
    }
}
