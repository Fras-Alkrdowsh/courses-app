<?php

namespace App\Models;

use App\Models\Catigory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{

    protected $fillable = [
        'name',
        'email',
        'phone',
        'magor',
        'password'
    ];

    public function catigories()
    {
        return $this->HasMany(Catigory::class);
    }
}
