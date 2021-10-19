<?php

namespace App\Http\Livewire\Chat;

use App\Models\User;
use App\Models\Conversation;
use Livewire\Component;
use App\Models\Message;
Use App\Events\MessageCreated;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;

class ChatBox extends Component
{

    public $user;
    public $conversation;
    public $chat = false;
    public $fetchedMessages;

    public $body;

    protected $rules = [
        'body' => 'required|string'
    ];


    public function render()
    {
        return view('livewire.chat.chat-box');
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
        $this->chat = true;
        $this->user = User::findOrFail($id);

        $conversation = Conversation::query()
        ->where(function ($query) use ($id) {
            $query->where(['user_id' => $id, 'message_to' => auth()->id()]);
        })->orWhere(function ($query) use ($id) {
            $query->where(['user_id'=> auth()->id(), 'message_to' => $id]);
        })->with('messages')->first();


        if($conversation != null){
            $this->conversation = $conversation;
        }else{
            $this->conversation = Conversation::Create([
                'user_id' => auth()->id(),
                'message_to' => $id,
            ]);
        }
    }

    public function beginConversation($conversation)
    {
        $this->conversation = Conversation::find($conversation);
        $this->sender();
        $this->chat = true;

    }


    public function sender()
    {
        if ($this->conversation->user_id == auth()->id()){
            return $this->user = $this->conversation->toUser;
        }else {
           return $this->user = $this->conversation->user;
        }
    }

    public function sendMessage()
    {
        $data = $this->validate();
        $data['user_id'] = auth()->id();
        $message =  $this->conversation->messages()->create($data);
        $this->reset('body');
        $this->emit('pushMessage');
        broadcast(new MessageCreated($message));
    }
}
