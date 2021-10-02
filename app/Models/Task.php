<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable =['title','project_id','is_finished','position'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
