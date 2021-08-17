<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChatProfile extends Component
{
    public function render()
    {
        $user = auth()->user();
        $user->load('identity');
        return view('livewire.chat-profile', compact('user'));
    }
}
