<?php

namespace App\Http\Livewire\Project;

use App\Models\Project;
use Livewire\Component;

class Projects extends Component
{
    public $projects;
    public $sss;

    public function render()
    {
        $this->projects = Project::with('tasks')->orderByDesc('created_at')->get();
        // $this->projects = Project::whereIn('id', [1,2])->get();
        return view('livewire.project.projects');
    }
    public function filterAll()
    {
        $this->projects->all();
    }
    public function filterFinished()
    {
            // $data = Project::with(['tasks' => function ($query){
            //     $query->where('is_finished', '!=', false);
            //     }
            // ])->get();

            // $filter = collect($data);
            // $filter->each(function($item){
            //     $item->intersectByKeys(['id' => '1', 'name' => 'dolore']);
            // });;
            // $filter->all();
            // $filter = $data->where('is_finished', true);
        // dd($filter);
        // $this->sss = "yes";
    }
    public function filterOngoing()
    {

    }
    public function filterUnworked()
    {

    }
}
