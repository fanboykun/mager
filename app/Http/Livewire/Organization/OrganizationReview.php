<?php

namespace App\Http\Livewire\Organization;

use App\Models\Article;
use App\Models\Event;
use App\Models\Setting;
use App\Models\User;
use Livewire\Component;

class OrganizationReview extends Component
{
    public $setting;
    public $users_count;
    public $articles_count;
    public $events_count;

    public function mount()
    {
        $this->users_count = User::count();
        $this->articles_count = Article::count();
        $this->events_count = Event::count();
        $this->setting = Setting::first();
    }

    public function render()
    {
        return view('livewire.organization.organization-review');
    }
}
