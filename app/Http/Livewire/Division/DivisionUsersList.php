<?php

namespace App\Http\Livewire\Division;

use Livewire\Component;

class DivisionUsersList extends Component
{
    public $users;

    public function mount($users)
    {
        $this->users = $users;
    }
    public function render()
    {
        return view('livewire.division.division-users-list');
    }
}
