<?php

namespace App\Http\Livewire\Division;

use App\Models\Division;
use Livewire\Component;

class DivisionEdit extends Component
{
    public Division $division;
    
    public function render()
    {
        return view('livewire.division.division-edit');
    }
}
