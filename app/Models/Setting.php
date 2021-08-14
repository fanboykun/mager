<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['name','tagline', 'address', 'phone', 'email', 'accreditation', 'npsn', 'logo', 'instagram', 'twitter'];
}
