<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'conversation_id', 'body'];

    protected $appends = ['selfOwned','published'];

    protected $touches = ['conversation'];


    public function getPublishedAttribute(){

        return Carbon::createFromTimeStamp(strtotime($this->attributes['created_at']) )->diffForHumans();
    }

    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getSelfOwnedAttribute()
    {
        return $this->user_id === auth()->id();
    }

    public function isOwn()
    {
        return $this->user_id === auth()->id();
    }

}
