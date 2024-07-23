<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\Extra;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'model', 'description', 'kw', 'price','brand_id'];

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function extras(){
        return $this->belongsToMany(Extra::class);
    }

    public function totalExtraCost(){
        return $this->extras->sum('price');
    }
}
