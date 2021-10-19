<?php

namespace App\Http\Livewire\Chat;

use Livewire\Component;

class ChatRoom extends Component
{

    public $tab = 'chat';

    public function render()
    {
        return view('livewire.chat.chat-room');
    }

    public function openTab($tab)
    {
        $this->tab = $tab;
    }
}
