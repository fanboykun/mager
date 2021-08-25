<?php

namespace App\Http\Livewire\Tag;

use App\Models\Tag;
use Livewire\Component;

class ListTag extends Component
{
    public $search;

    public $listeners = ['tagsModified' => 'render'];

    public function render()
    {
        $tags = Tag::where('name', 'like', '%'.$this->search.'%')
        ->withCount('articles')->orderByDesc('created_at')->get();
        return view('livewire.tag.list-tag', compact('tags'));
    }
}
