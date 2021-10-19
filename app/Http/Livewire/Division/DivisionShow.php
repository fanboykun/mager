<?php

namespace App\Http\Livewire\Division;

use App\Models\Division;
use Livewire\Component;

class DivisionShow extends Component
{
    public $division;
    public $div_tab = 'users-list';

    public function mount($division)
    {
        $this->division = Division::findOrFail($division)
        ->with(['manager', 'users'])
        ->withCount('users')
        ->withCount('projects')
        ->withCount('announcements')
        ->first();
    }

    public function render()
    {
        return view('livewire.division.division-show');
    }
    public function openTab($content)
    {
        $this->div_tab = $content;
    }
}
