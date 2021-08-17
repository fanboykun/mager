<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class ChangePassword extends Component
{

    public $user;
    public $current_password;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'current_password' => 'required',
        'password' => 'required',
        'password_confirmation' => 'required',
    ];

    public function mount()
    {
        $this->user = Auth::user();
    }

    public function render()
    {
        return view('livewire.profile.change-password');
    }

    public function updatePassword()
    {
        $this->validate();
        if($this->password === $this->password_confirmation){
            if(! Hash::check($this->current_password, $this->user->password)){
                return back();
            }
            $this->user->forceFill([
                'password' => Hash::make($this->password),
            ])->save();
        }
        $this->render();
    }
}
