<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ChatFriends extends Component
{
    public $search;

    public function render()
    {
        $users = User::where('name', 'like', '%'.$this->search.'%')
        ->where('id', '!=', auth()->id())
        ->with('identity')
        ->get();

        $grouped = $users->sortBy('name')->groupBy(function ($item, $key) {
            return substr($item['name'], 0, 1);
        });
        return view('livewire.chat-friends', ['grouped' => $grouped]);

    }
}
