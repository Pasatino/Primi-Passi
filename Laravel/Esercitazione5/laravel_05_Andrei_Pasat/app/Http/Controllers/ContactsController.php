<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactReceivedMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function salvaContatto(Request $request){

        /* dd($request->all()); */
        if($request->name==null || $request->email==null || $request->message==null){
            return redirect()->back()->with(['error'=>'Compila il form con i dati corretti!']);
        }
        
        $mail = new ContactReceivedMail($request->name, $request->email, $request->message);
        Mail::to($request->email)->send($mail);
        
        return redirect(route('thankYou'));
    }
}   
