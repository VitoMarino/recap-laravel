<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Sport;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function sports(){
        return $this->belongsToMany(Sport::class);
    }
}
