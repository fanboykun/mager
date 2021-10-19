<?php

namespace App\Http\Livewire\Chat;

use Livewire\Component;
use App\Models\Message;
use App\Models\User;

class ChatMessenger extends Component
{
    public $message;

    // public function mount($message)
    // {
    //     $this->message = $message;
    // }

    // public function getListeners()
    // {
    //     return [
    //         "echo-private:chat.{$this->message->conversation_id},MessageCreated" => 'sendMessage'
    //     ];
    // }


    public function render()
    {
        return view('livewire.chat.chat-messenger');
    }


    public function sendMessage()
    {
        $this->emit('pushMessage');
    }
}
