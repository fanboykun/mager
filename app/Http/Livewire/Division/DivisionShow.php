<?php

namespace App\Http\Livewire\Division;

use App\Models\Division;
use App\Models\User;
use Livewire\Component;

class DivisionShow extends Component
{
    public $division;
    public $tab = null ?? 'users-list';
    public $queryString = ['tab'];

    public $listeners = ['openTab' => 'changeTab'];

    public function mount(Division $division)
    {
        $this->division = $division
        ->load(['manager', 'users'])
        ->loadCount('users')
        ->loadCount('projects')
        ->loadCount('announcements');
    }

    public function render()
    {
        return view('livewire.division.division-show');
    }

    public function changeTab($content)
    {
        return $this->tab = $content;
    }
}
