<?php

namespace App\Http\Livewire\Profile;

use App\Models\Identity;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DisplayInformation extends Component
{
    public $identity;
    public $status;
    public $instagram;
    public $description;

    protected $rules = [
        'status' => 'nullable|string',
        'instagram' => 'nullable|string',
        'description' => 'nullable|string',
    ];

    public function mount(Identity $identity)
    {
        $this->identity = Identity::where('user_id', Auth::id())->first();
        $this->status = $this->identity->status;
        $this->instagram = $this->identity->instagram;
        $this->description = $this->identity->description;
    }
    public function render()
    {
        return view('livewire.profile.display-information');
    }

    public function updateIdentity()
    {
        $data = $this->validate();
        $this->identity->update($data);
        $this->render();
    }
}
