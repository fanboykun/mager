<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;

class UsersList extends Component
{
    public $search;
    public $load = 6;
    public $total_user;

    public function mount()
    {
        $this->total_user = User::count();
    }

    public function render()
    {
        $users = User::where('name', 'like', '%'.$this->search.'%')
        ->with('identity')
        ->take($this->load)
        ->get();
        return view('livewire.user.users-list', compact('users'));
    }

    public function loadMore()
    {
        $this->load += 6;
    }
}
