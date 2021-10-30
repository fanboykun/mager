<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Livewire\Component;

class Profile extends Component
{
    public $tab = null ?? 'personal-information';
    public $user;
    public $queryString = ['tab'];

    public $listeners = ['changeTab' => 'moveTab'];

    public function render()
    {
        $this->user = User::find(auth()->id());
        return view('livewire.profile.profile');
    }

    public function moveTab($tab)
    {
        return $this->tab = $tab;
    }
}
