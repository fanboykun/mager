<?php

namespace App\Http\Livewire\Project;

use App\Models\Project;
use Livewire\Component;

class ProjectFinished extends Component
{
    public $finished_project;
    public function render()
    {
        $this->finished_project = Project::whereNotIn('id',function ($query){
            $query->selectRaw('project_id')
            ->from('tasks')
            ->whereNull('completed_at');
        })->get();
        return view('livewire.project.project-finished');
    }
}
