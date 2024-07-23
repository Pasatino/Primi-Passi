<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function servizi(){
        $servizi =[
            [
                'id' => 1,
                'servizio'=>'Rimozioni carie',
                'img'=>'images/carrie.jpeg',
                'descrizione' => 'Preserva la salute dei tuoi denti con il nostro servizio di rimozione carie. Ripristiniamo la tua forza e la funzionalità del tuo sorriso.'
            ],
            [
                'id' => 2,
                'servizio' => 'Apparecchio',
                'img'=>'images/apparecchio.jpg',
                'descrizione' => 'I nostri impianti dentali sono una soluzione permanente e naturale per sostituire i denti mancanti, ripristinando il tuo sorriso e la tua fiducia.'
            ],
            [
                'id' => 3,
                'servizio' => 'Sbiancamento denti',
                'img'=>'images/sbiancamento.jpeg',
                'descrizione' => 'Ottieni un sorriso più luminoso con il nostro servizio di sbiancamento denti. Utilizziamo trattamenti sicuri ed efficaci per rimuovere macchie e discromie, restituendo ai tuoi denti un bianco naturale.'
            ],
        ];

        return view('servizi', ['servizi'=>$servizi]);

    }

    public function aboutUs(){
        return view('aboutUS');
    }
}
