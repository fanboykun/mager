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


    public function getListeners()
    {
        return [
            'pushMessage' => 'render',
            "echo:chat,MessageCreated" => 'getConversation'
        ];
    }

    public function render()
    {
        $this->users = User::where('name', 'like', '%'.$this->search.'%')
        ->where('id', '!=', auth()->id())
        ->get();
        $this->grouped = $this->users->sortBy('name');
        $this->getConversation();
        return view('livewire.chat-users');
    }

    public function getConversation()
    {
        $this->conversations = Conversation::where('user_id', auth()->id())
        ->orWhere('message_to', auth()->id())
        ->whereHas('messages')
        ->with(['user', 'toUser', 'latestMessage'])
        ->orderBy('updated_at', 'desc')
        ->get();
        // dd($this->conversations);
    }
    public function see()
    {
      $data = Conversation::with('latestMessage')->get();
      dd($data);
    }
}
