<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;

class Projects extends Component
{
    public string $active = "flex items-center px-3 py-2 rounded-md bg-theme-20 dark:bg-dark-1 font-medium";
    public string $inactive = "flex items-center px-3 py-2 rounded-md";
    public $filter = null ?? "all";
    public $queryString = ['filter'];

    public $listeners = ['filter' => 'filterProject'];

    public function render()
    {
        return view('livewire.project.projects');
    }

    public function filterProject($filter)
    {
        $this->filter = $filter;
    }
}
