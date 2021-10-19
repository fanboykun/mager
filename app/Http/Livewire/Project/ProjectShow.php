<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Project;
use App\Models\Task;

class ProjectShow extends Component
{
    public $project;
    public $task;
    public bool $is_finished;
    public $unfinished;

    public function mount(Project $project)
    {
        $this->project = $project->load('tasks');
    }

    public function render()
    {
        return view('livewire.project.project-show');
    }

    public function completeTask(Task $task)
    {
        if($task->completed_at != null){
            $task->update([
                "completed_at" => null
            ]);
        }else{
            $task->update([
                "completed_at" => now()
            ]);
            $this->project->last_task_completed_at = now();
            $this->project->save();
        }
        // $task_col = collect($this->project->tasks);
        // $this->is_finished = $task_col->contains(function($value, $key){
        //     return $value->completed_at != null;
        // });
        $this->render();
    }

    public function updatedUnfinished()
    {
        
    }
}
