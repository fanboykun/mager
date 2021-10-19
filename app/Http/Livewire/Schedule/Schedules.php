<?php

namespace App\Http\Livewire\Schedule;

use App\Models\Schedule;
use Livewire\Component;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Schedules extends Component
{
    public $events;
    public $title;
    public $start;
    public $end;
    public $range;
    public bool $process = false;

    protected function getListeners()
    {
        return [
            'editEvent' => 'getEvents',
            'createEvent' => 'getDate',
            'dateSetted' => 'renewDate',
            'rearrangeDate' => 'updateDate'
        ];
    }

    public function render()
    {
        $this->events = Schedule::all()->map(function($item, $key){
            return [
                'id' => $item->id,
                'title' => $item->title,
                'start' => $item->start_at,
                'end' => $item->end_at,
            ];
        });

        return view('livewire.schedule.schedules');
    }
    public function renewDate($date1, $date2)
    {
        // $this->range = [$date1, $date2];
        $this->start = $date1;
        $this->end = $date2;
    }

    public function updateDate(Schedule $schedule, $start, $end)
    {
        $schedule->update([
            'start_at' => $start,
            'end_at' => $end,
        ]);
        $this->render();
    }

    public function saveSchedule()
    {
        // dd($this->range);
        $this->process = true;
        $schedule = new Schedule();
        $schedule->title = $this->title;
        $schedule->description = 'asdasfadhfajdnkfnjd';
        $schedule->start_at = Carbon::parse($this->start)->addSecond()->toDateTime();
        $schedule->end_at = Carbon::parse($this->end)->addSecond()->toDateTime();
        $schedule->save();
        // $this->dispatchBrowserEvent('goModal');
        $this->process = false;
        $this->reset(['title', 'start', 'end']);
        // $this->emit('refreshCalendar');
        // $this->render();
        return redirect()->route('schedules');
    }
}
