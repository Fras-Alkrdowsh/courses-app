<?php

namespace App\Models;

use App\Models\Lesson;
use App\Models\Trainer;
use Illuminate\Database\Eloquent\Model;

class Catigory extends Model
{
    protected $fillable = [
        'name', 'description', 'duration', 'image','trainer_id'
    ];
    
    public function trainer(){
        return $this->belongsTo(Trainer::class);
    }

    public function lessons()
    {
        return $this->HasMany(Lesson::class);
    }
}
