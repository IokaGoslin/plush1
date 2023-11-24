<?php

namespace App\Http\Controllers;

use App\Models\kr;
use Illuminate\Http\Request;

class PlushProducts extends Controller
{

    public function index()
    {
        $plushproducts = PlushProductsResource::collection(Event::all());
    
        return $plushproducts;
    }


    public function name()
    {

        $materialtype = MaterialtypeName::collection(MaterialType::all());

        return $plushproducts;

    }


    public function store(Request $request)
    {

        



    }

    public function show(kr $kr)
    {

    }

    
    public function edit(kr $kr)
    {

    }

    
    public function update(Request $request, kr $kr)
    {

    }


    public function destroy(kr $kr)
    {

    }
}
