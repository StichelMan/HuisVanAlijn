<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function puppets()
    {
        return $this->belongsToMany(Puppet::class, 'puppets_productions','production_id','puppet_id');
    }
}
