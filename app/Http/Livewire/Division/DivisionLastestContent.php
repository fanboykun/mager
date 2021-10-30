<?php

namespace App\Http\Livewire\Division;

use App\Models\Article;
use App\Models\User;
use App\Models\Division;
use Livewire\Component;

class DivisionLastestContent extends Component
{
    public $divison;
    public $user_articles;

    public function mount(Division $division)
    {
        $this->user_articles = User::where('division_id', $division->id)->whereHas('articles', function ($query){
            $query->with('category')->latest();
        })->get();
    }

    public function render()
    {
        return view('livewire.division.division-lastest-content');
    }
}
