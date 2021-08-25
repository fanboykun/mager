<?php

namespace App\Http\Livewire\Schedule;

use App\Models\Schedule;
use Livewire\Component;

class Schedules extends Component
{
    public $schedules;

    public function render()
    {
        $this->schedules = Schedule::orderByDesc('updated_at')->get();
        return view('livewire.schedule.schedules');
    }
}
