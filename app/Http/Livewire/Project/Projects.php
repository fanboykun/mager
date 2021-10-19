<?php

namespace App\Http\Livewire\Project;

use App\Models\Project;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Projects extends Component
{
    public string $active = "flex items-center px-3 py-2 rounded-md bg-theme-20 dark:bg-dark-1 font-medium";
    public string $inactive = "flex items-center px-3 py-2 rounded-md";
    public $filter = "all";
    public function render()
    {
        // $this->filter = "all";
        // $this->projects = Project::with('tasks')->groupBy('tasks.is_finished')->get();
        // $this->projects = Project::whereIn('id', [1,2])->get();
        return view('livewire.project.projects');
    }
    public function filterAll()
    {
        $this->filter = "all";
    }
    public function filterFinished()
    {
        $this->filter = "finished";
        // $this->projects = DB::table('projects')
        // ->whereExists(function ($query) {
        //     $query->select(DB::raw(1))
        //           ->from('tasks')
        //           ->whereColumn('tasks.project_id', 'projects.id');
        // })
        // ->get();
        // $this->projects = Project::where(function ($query) {
        //     $query->select('is_finished')
        //         ->from('tasks')
        //         ->whereColumn('tasks.project_id', 'projects.id')
        //         // ->orderByDesc('tasks.completed_at')
        //         ->limit(1);
        // }, true)->get();
        // $this->projest = Project::with('completedTask')->get();
        // dd($this->projects);
        // $this->projects = Project::whereHas('tasks', function($query){
        //     $query->whereNotNull('completed_at');
        // })->get();
        // $this->projects->each(function($item, $key){
        //     $this->pro[] = collect($item->tasks);
        // });
        // $anu = collect($this->pro);
        // $anu->having('is_finished', '=', true);
        // dd($anu);
    }
    public function filterOngoing()
    {
        $this->filter = "ongoing";
    }

    public function filterUnworked()
    {
        $this->filter = "unworked";
        // $this->projects = Project::whereHas('tasks', function($query){
        //     $query->whereNull('completed_at');
        // })->get();
    }
}
