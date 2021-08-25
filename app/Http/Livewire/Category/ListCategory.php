<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class ListCategory extends Component
{
    public $search;

    public $listeners = ['categoryModified' => 'render'];

    public function render()
    {
        $categories = Category::where('name', 'like', '%'.$this->search.'%')
        ->withCount('articles')->orderByDesc('created_at')->get();
        return view('livewire.category.list-category', compact('categories'));
    }
}
