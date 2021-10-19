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
        'finished_at',
        'last_task_completed_at',
        'description',
        'due_date',
    ];

    protected $casts = [
        'finished_at' => 'datetime',
        'last_task_completed_at' => 'datetime',
        'due_date' => 'datetime',
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
