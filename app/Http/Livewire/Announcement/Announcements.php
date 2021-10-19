<?php

namespace App\Http\Livewire\Announcement;

use App\Models\Announcement;
use Livewire\Component;

class Announcements extends Component
{
    public $announcements;

    public function render()
    {
        $this->announcements = Announcement::orderByDesc('is_important')->get();
        return view('livewire.announcement.announcements');
    }
}
