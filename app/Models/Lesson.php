<?php

namespace App\Models;

use App\Models\Catigory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'name', 'description','image','catigory_id'
    ];

    public function catigory(){
        return $this->belongsTo(Catigory::class);
    }
    
}
