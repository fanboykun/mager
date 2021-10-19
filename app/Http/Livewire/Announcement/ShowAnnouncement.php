<?php

namespace App\Http\Livewire\Announcement;

use Livewire\Component;
use App\Models\Announcement;

class ShowAnnouncement extends Component
{
    public $announcement;

    public function mount(Announcement $announcement)
    {
        $this->announcement = $announcement;
    }
    public function render()
    {
        return view('livewire.announcement.show-announcement');
    }
}
