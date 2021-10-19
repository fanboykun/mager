<?php

namespace App\Http\Livewire\Schedule;

use App\Models\Schedule;
use LivewireUI\Modal\ModalComponent;

class EditSchedule extends ModalComponent
{
    public $schedule;
    public $title;
    public $description;
    public $start_at;
    public $end_at;

    public function mount(Schedule $schedule_id)
    {
        $this->schedule = $schedule_id;
        $this->title = $schedule_id->title;
        $this->description = $schedule_id->description;
        $this->start_at = $schedule_id->start_at;
        $this->end_at = $schedule_id->end_at;
    }
    public function render()
    {
        return view('livewire.schedule.edit-schedule');
    }
}
