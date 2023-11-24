<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialType extends Model
{
    use HasFactory;
    protected $fillabel = ['name',];

    public function material_type(){
        return $this->belongsTo(Status::class, 'type_id','id');
    }
    
}
