<?php

namespace App\Http\Livewire\Schedule;

use LivewireUI\Modal\ModalComponent;


class AddToTheDate extends ModalComponent
{
    public $start;

    public function mount($start_at)
    {
        $this->start = $start_at;
    }
    public function render()
    {
        return view('livewire.schedule.add-to-the-date');
    }
}
