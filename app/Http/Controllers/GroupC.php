<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
class GroupC extends Controller
{
    //
    public function index(){
        $grupos = Group::all()->toJson();
        dd($grupos);
    }

    public function findGroup($key_name) {
        $grupo = Group::where('key_name', $key_name)->first()->toJson();
        dd($grupo);
    }
}
