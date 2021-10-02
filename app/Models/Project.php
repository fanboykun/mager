<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'division_id',
        'title',
        'description',
        'due_date',
    ];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
