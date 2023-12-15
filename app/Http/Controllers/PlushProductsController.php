<?php

namespace App\Http\Controllers;

use App\Models\kr;
use Illuminate\Http\Request;

class PlushProducts extends Controller
{



    public function store(Request $request){

    

    
    if ($request->id == null)
    {
        $plushproducts = new MaterialType;
        $plushproducts->name = $request->name;
        $plushproducts->price = $request->price;
        $plushproducts->type_id = $request->type_id;

        $plushproducts->save();

        return $plushproducts;
    }

    else {
        $plushproducts = MaterialType::find($request->id);
    }
}

    }


    public function update(Request $request, PlushProducts $plushproducts)
    {

    

    if($request->id == null);
        {
            $plushproducts = new PlushProducts;
            $plushproducts->name = $request->name;
            $plushproducts->price = $request->price;
            $plushproducts->type_id = $request->type_id;
        }
    }



