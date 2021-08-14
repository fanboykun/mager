<?php

namespace App\Http\Livewire\Article;

use LivewireUI\Modal\ModalComponent;

class DeleteArticle extends ModalComponent
{
    public function render()
    {
        return view('livewire.article.delete-article');
    }
}
