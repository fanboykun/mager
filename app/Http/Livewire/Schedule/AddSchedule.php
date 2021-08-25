<?php

namespace App\Http\Livewire\Schedule;

use App\Models\Schedule;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class AddSchedule extends ModalComponent
{

    public $title;
    public $description;
    public $start_at;
    public $end_at;

    protected $rules = [
        'title' => 'required',
        'description' => 'nullable|string',
        'start_at' => 'required|date',
        'end_at' => 'required|date',
    ];

    public function render()
    {
        return view('livewire.schedule.add-schedule');
    }

    public function save()
    {
        $data = $this->validate();
        Schedule::create($data);
        $this->closeModal();
    }
}
