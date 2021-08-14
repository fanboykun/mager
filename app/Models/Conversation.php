<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function toUser()
    {
        return $this->belongsTo(User::class, 'message_to');
    }

    // public function getRouteKeyName()
    // {
    //     return 'uuid';
    // }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
