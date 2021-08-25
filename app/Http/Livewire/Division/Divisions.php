<?php

namespace App\Http\Livewire\Division;

use Livewire\Component;
use App\Models\Division;

class Divisions extends Component
{

    public $divisions;

    public function render()
    {
        $this->divisions = Division::with('manager')->with( 'users')->withCount(['users', 'announcements', 'projects'])->get();
        return view('livewire.division.divisions');
    }
}
