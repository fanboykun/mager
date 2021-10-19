<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Project;

class ProjectUnworked extends Component
{
    public $unworked_project;

    public function render()
    {
        $this->unworked_project = Project::whereNotIn('id',function ($query){
            $query->selectRaw('project_id')
            ->from('tasks')
            ->whereNotNull('completed_at');
        })->get();
            return view('livewire.project.project-unworked');
    }
}
