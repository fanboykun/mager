<?php

namespace App\Http\Livewire;

use App\Models\Conversation;
use Livewire\Component;
use App\Models\User;

class ChatUsers extends Component
{

    public $users;
    public $grouped;
    public $conversations;

    public $search;


    public $listeners = ['pushMessage' => 'render'];

    // public function mount()
    // {
    //     $this->users = User::where('id', '!=', auth()->id())->get();
    //     $this->grouped = $this->users->sortBy('name');
    // }

    public function render()
    {
        $this->users = User::where('name', 'like', '%'.$this->search.'%')->get();
        $this->grouped = $this->users->sortBy('name');
        $this->conversations = Conversation::where('user_id', auth()->id())
        ->orWhere('message_to', auth()->id())
        ->whereHas('messages')
        ->with(['user', 'toUser'])
        ->orderBy('updated_at', 'desc')
        ->get();
        return view('livewire.chat-users');
    }
}
