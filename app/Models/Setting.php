<?php

namespace App\Models;

use App\Traits\HasLogo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    use HasLogo;

    protected $fillable = ['name','tagline', 'address', 'phone', 'email', 'accreditation', 'npsn', 'logo', 'instagram', 'twitter'];

    protected $appends = [
        'logo_url',
    ];
}
