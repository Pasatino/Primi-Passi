<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articoli', function () {

    $articles= [
        1=> ['id'=>1, 'title'=>'Article 1', 'body'=>'Spazzola'],
        2=> ['id'=>2, 'title'=>'Article 2', 'body'=>'Renault Clio V'],
        3=> ['id'=>3, 'title'=>'Article 3', 'body'=>'Spiderman'],
        4=> ['id'=>4, 'title'=>'Article 4', 'body'=>'Marte'],
    ];
    return view('articoli', compact('articles'));
})->name('articles');

Route::get('/articolo/{id}',function($id){
    
    $articles= [
        1=> ['id'=>1, 'title'=>'Article 1', 'body'=>'Spazzola'],
        2=> ['id'=>2, 'title'=>'Article 2', 'body'=>'Renault Clio V'],
        3=> ['id'=>3, 'title'=>'Article 3', 'body'=>'Spiderman'],
        4=> ['id'=>4, 'title'=>'Article 4', 'body'=>'Marte'],
    ];
    
      if(array_key_exists($id,$articles)){
        
        $article = $articles[$id];
        return view('articolo',compact('article'));
      
      }else{
        
        abort(404);
    
      }
    
    
    })->name('articolo');
