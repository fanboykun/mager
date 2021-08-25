<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'divisions_id',
        'title',
        'content',
        'is_important'
    ];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
