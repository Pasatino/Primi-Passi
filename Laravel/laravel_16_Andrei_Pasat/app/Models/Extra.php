<?php

namespace App\Models;

use App\Models\Car;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Extra extends Model
{
    use HasFactory;
    protected $fillable=['title','description','price'];

    public function cars(){
        return $this->belongsToMany(Car::class);
    }
}
