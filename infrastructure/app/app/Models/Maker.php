<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maker extends Model
{
    use HasFactory;
    public function puppets()
    {
        return $this->belongsToMany(Puppet::class, 'puppets_makers','maker_id','puppet_id');
    }
    public $timestamps = false;
}
