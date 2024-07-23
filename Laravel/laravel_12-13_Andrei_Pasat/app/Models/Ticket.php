<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['object','description','status','image','category_id'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function Category(){
        return $this->belongsTo(Category::class);
    }

}