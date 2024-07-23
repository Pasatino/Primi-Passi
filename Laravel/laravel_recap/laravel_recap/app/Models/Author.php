<?php

namespace App\Models;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'surname', 'dateN', 'link'];

    public function books(){
        return $this->hasMany(Book::class);
    }
}
