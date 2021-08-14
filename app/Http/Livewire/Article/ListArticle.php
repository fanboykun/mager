<?php

namespace App\Http\Livewire\Article;

use App\Models\Article;
use Livewire\Component;

class ListArticle extends Component
{
    public $load = 6;
    public function render()
    {
        $articles = Article::with(['user', 'category', 'tags'])->orderBy('created_at')->take($this->load)->get();
        return view('livewire.article.list-article', compact('articles'));
    }

    public function loadMore()
    {
        $this->load += 6;
    }
}
