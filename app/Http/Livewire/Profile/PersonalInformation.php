<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use Livewire\WithFileUploads;

class PersonalInformation extends Component
{
    use WithFileUploads;

    public $user;
    public $photo;
    public $name;
    public $email;
    public $phone;
    public $address;
    public $profile_photo_url ;

    public function mount()
    {
        $this->user = auth()->user();
        $this->profile_photo_url = auth()->user()->profile_photo_url;
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
        $this->phone = auth()->user()->identity->phone;
        $this->address = auth()->user()->identity->address;

    }

    public function render()
    {

        return view('livewire.profile.personal-information');
    }

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image', // 1MB Max
        ]);
    }

    public function removePreviewPhoto()
    {
        $this->reset();
    }

    public function updatePersonalInformation()
    {
        if($this->photo){
            $this->user->updateProfilePhoto($this->photo);
        }
        $this->user->forceFill([
            'name' => $this->name,
            'email' => $this->email,
        ])->save();
        // $this->user->update(['name' => $this->name, 'email' => $this->email]);
        $this->user->identity->update(['phone' => $this->name, 'address' => $this->address]);

        $this->reset();
        return redirect()->route('update-profile');
    }
}
