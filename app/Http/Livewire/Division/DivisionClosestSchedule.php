<?php

namespace App\Http\Livewire\Division;

use App\Models\Division;
use App\Models\Schedule;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DivisionClosestSchedule extends Component
{
    public $division;
    public $user_schedules;

    public function mount(Division $division)
    {
        $this->division = $division;
        $this->user_schedules = User::where('division_id', $division->id)->whereHas('schedules', function ($query){
            $query->latest();
        })->get();
    }

    public function render()
    {
        // $schedules->groupBy(function ($item){
        //     return $item->updated_at->format('d m y');
        // });
        // $this->user_schedules = $schedules;
        // $user = $this->division->users->map(function ($item){
        //     return [
        //         'id' => $item->id,
        //     ];
        // });
        // $this->user_schedules = Schedule::whereIn('user_id', $user)->with('user')
        // ->orderBy('created_at')
        // ->get()
        // ->groupBy(function ($val){
        //     return Carbon::parse($val->created_at)->format('d m y');
        // });

        return view('livewire.division.division-closest-schedule');
    }
}
