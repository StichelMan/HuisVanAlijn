<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puppet extends Model
{
    use HasFactory;
    public function makers()
    {
        return $this->belongsToMany(Maker::class, 'puppets_makers','puppet_id','maker_id');
    }
    public function productions()
    {
        return $this->belongsToMany(Production::class, 'puppets_productions','puppet_id','production_id');
    }
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
