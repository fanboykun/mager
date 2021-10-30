<?php

namespace App\Http\Livewire\Division;

use App\Models\Division;
use App\Models\Project;
use App\Models\Task;
use Livewire\Component;

class DivisionLastestWork extends Component
{
    public Division $division;
    public $lastest_project;
    public $lastest_task;

    public function render()
    {
        $this->lastest_project = Project::where('division_id', $this->division->id)->take(3)->get();
        $pid = $this->lastest_project->pluck('id');
        $this->lastest_task = Task::whereIn('project_id', $pid)->take(3)->get();
        return view('livewire.division.division-lastest-work');
    }
}
