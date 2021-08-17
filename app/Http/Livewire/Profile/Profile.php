<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Livewire\Component;

class Profile extends Component
{
    public $tab = 1;
    public $user;

    public function render()
    {
        $this->user = User::find(auth()->id());
        return view('livewire.profile.profile');
    }

    public function changeTab($tab)
    {
        $this->tab = $tab;
    }

    public function see()
    {
        dd($this->user);
    }
}
