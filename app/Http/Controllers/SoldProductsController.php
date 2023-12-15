<?php

namespace App\Http\Controllers;

use App\Models\SoldProducts;
use Illuminate\Http\Request;

class SoldProductsController extends Controller
{






    public function store(Request $request)
    if ($request->id == null)
    {
        $soldproducts = new SoldProducts;
        $soldproducts->name = $request->name;
        $soldproducts->price = $request->price;
        $soldproducts->type_id = $request->type_id;

        $plushproducts->save();

        return $plushproducts;
    }

    else {
        $plushproducts = MaterialType::find($request->id);
    }
}

    






    public function update(Request $request, SoldProducts $soldproducts){
    if($request->id==null)
    {
        $soldproducts = new MaterialType;
        $soldproducts->sum = $request->sum;
        $soldproducts->amount = $request->amount;
        $soldproducts->plush_products_id = $request->plush_products_id;

        $soldproducts->save();

        return $true;
    }

    else {
        $soldproducts = MaterialType::find($request->id);
        }

    }

}
