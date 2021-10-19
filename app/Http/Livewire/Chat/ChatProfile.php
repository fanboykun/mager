<?php

namespace App\Http\Livewire\Chat;

use Livewire\Component;

class ChatProfile extends Component
{
    public function render()
    {
        $user = auth()->user();
        $user->load('identity');
        return view('livewire.chat.chat-profile', compact('user'));
    }
}
