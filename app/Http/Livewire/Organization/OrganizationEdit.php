<?php

namespace App\Http\Livewire\Organization;

use Livewire\Component;
use App\Models\Setting;
use Livewire\WithFileUploads;


class OrganizationEdit extends Component
{
    use WithFileUploads;

    public Setting $setting;
    // public $new_logo;
    public $name;
    public $tagline;
    public $address;
    public $phone;
    public $email;
    public $npsn;
    public $accreditation;
    public $logo;
    public $instagram;
    public $twitter;


    protected $rules = [
            'name' => 'required',
            'tagline' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'npsn' => 'required',
            'accreditation' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
    ];

    public function mount()
    {
        $this->setting = Setting::first();
        $this->fill([
            'name' => $this->setting->name,
            'tagline' => $this->setting->tagline,
            'address' => $this->setting->address,
            'phone' => $this->setting->phone,
            'email' => $this->setting->email,
            'npsn' => $this->setting->npsn,
            'accreditation' => $this->setting->accreditation,
            'instagram' => $this->setting->instagram,
            'twitter' => $this->setting->twitter,
        ]);
    }

    public function render()
    {
        return view('livewire.organization.organization-edit');
    }

    public function removePreviewLogo()
    {
        if($this->logo){
            $this->reset('logo');
        }else{
            $this->setting->deleteLogo();
            $this->setting->forceFill([
                'logo' => ''
            ]);
        }
    }

    public function updateSetting()
    {
        $data = $this->validate();
        if($this->logo){
            $this->setting->updateLogo($this->logo);
        }
        $this->setting->update($data);
        $this->notify('Organization Data Has Been Updated', 'Updated!', 'info');
        $this->render();
    }
}
