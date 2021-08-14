<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ChatFriends extends Component
{
    public $search;

    public function mount()
    {
        // $users = User::all();

        // $this->grouped = $users->sortBy('name')->groupBy(function ($item, $key) {
        //     return substr($item['name'], 0, 1);
        // });
        // dd($this->grouped);
    }

    public function render()
    {
        $users = User::where('name', 'like', '%'.$this->search.'%')->get();

        $grouped = $users->sortBy('name')->groupBy(function ($item, $key) {
            return substr($item['name'], 0, 1);
        });
        // dd($grouped);
        return view('livewire.chat-friends', ['grouped' => $grouped]);

    }
}
