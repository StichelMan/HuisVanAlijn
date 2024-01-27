<?php

namespace App\Http\Controllers;

use App\Models\Puppet;
use Illuminate\Http\Request;

class FiddleController extends Controller
{
    public function getPuppet($id){
        //to
        $puppet = Puppet::where('id',$id)->with('makers','productions')->orderBy('id', 'asc')->get()->toArray();
        dd($puppet);
    }
}
