<?php

namespace App\Http\Controllers;

use App\Models\kr;
use Illuminate\Http\Request;

class MaterialType extends Controller
{

    public function index(Request $request){
    if($request->id==null)
    {
        $mateiraltype = new MaterialType;
        $mateiraltype->name = $request->name;

        $mateiraltype->save();

        return $event;
    }

    else {
        $mateiraltype = MaterialType::find($request->id);
        }
    }
}
