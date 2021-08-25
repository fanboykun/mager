<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $fillable = [
        'manager_id',
        'name',
        'descrption'
    ];

    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function announcements()
    {
        return $this->hasMany(Announcement::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
