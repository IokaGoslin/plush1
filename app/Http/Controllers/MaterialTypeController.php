<?php

namespace App\Http\Controllers;

use App\Models\kr;
use Illuminate\Http\Request;

class MaterialType extends Controller
{

    public function index()
    {
        $materialtype = MaterialTypeResources::collection(Event::all());
    
        return $materialtype;
    }


    public function name()
    {

        $materialtype = MaterialtypeName::collection(MaterialType::all());

        return $materialtype;

        
    }

}
