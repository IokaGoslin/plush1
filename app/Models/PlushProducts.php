<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlushProducts extends Model
{
    use HasFactory;
    protected $fillabel = ['name','price','type_id',];

    public function plush_products(){
        return $this->belongsTo(Status::class, 'plush_products_id', 'type_id');
    }
}
