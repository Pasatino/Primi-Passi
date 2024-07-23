<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public $user = [
        'name'=>'Andrei',
        'email'=>'pasatino@gmail.com'
    ];
    
    public $articles= [
        1=> ['id'=>1, 'title'=>'Article 1', 'body'=>'Spazzola'],
        2=> ['id'=>2, 'title'=>'Article 2', 'body'=>'Renault Clio V'],
        3=> ['id'=>3, 'title'=>'Article 3', 'body'=>'Spiderman'],
        4=> ['id'=>4, 'title'=>'Article 4', 'body'=>'Marte'],
    ];

    public function home(){
        return view('home', ['user'=>$this->user]);
    }

    public function articoli(){

        $articles = $this->articles;
        return view('pages.articoli', compact('articles'));
    }

    public function articolo($id){

        if(array_key_exists($id,$this->articles)){
        
            $article = $this->articles[$id];
            return view('pages.articolo',compact('article'));
          
          }else{
            
            abort(404);
        
          }
    }
}