<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Conversation;
use Livewire\Component;
use App\Models\Message;
Use App\Events\MessageCreated;

class ChatBox extends Component
{

    public $user;
    public $conversation;
    public $chat = false;
    // public $message;

    public $body;

    protected $rules = [
        'body' => 'required|string',
    ];


    public function mount(Message $message)
    {
        $this->conversation = $message->conversation_id;
    }


    public function render()
    {
        return view('livewire.chat-box');
        // dd($this->conversation);
    }

    public function getListeners()
    {
        return [
            'beginChat' => 'beginChat',
            'beginConversation' => 'beginConversation',
            'pushMessage' => 'render',
            "echo:chat,MessageCreated" => 'render'
            // "echo-private:chat.{$this->conversation},MessageCreated" => 'render'
        ];
    }

    public function beginChat($id)
    {
        $this->user = User::find($id);
        $this->conversation = Conversation::firstOrCreate([
            'user_id' => auth()->id(),
            'message_to' => $this->user->id,
        ]);
        $this->chat = true;
    }

    public function beginConversation($conversation)
    {
        $this->conversation = Conversation::find($conversation);

        if ($this->conversation->user_id == auth()->id()){
            $this->user = $this->conversation->toUser;
        }else {
            $this->user = $this->conversation->user;
        }
        $this->chat = true;
    }

    public function sendMessage()
    {
        $data = $this->validate();
        $data['user_id'] = auth()->id();
        $message =  $this->conversation->messages()->create($data);
        $this->reset('body');
        // $this->emit('pushMessage');
        broadcast(new MessageCreated($message));
    }
}
