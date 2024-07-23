<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreTicketRequest;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        return view('tickets.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketRequest $request)
    {
        //salvataggio del ticket
        $ticket = Ticket::create([
            'object'=>$request->object,
            'description'=>$request->description,
            'category_id'=>$request->category_id
        ]);

        //salvataggio dell'immagine
        if($request->hasFile('image')){
            $path=$request->file('image')->storeAs('public/tickets/' .$ticket->id,'screenshot.jpg');
            $ticket->image=$path;
            $ticket->save();
        }
        
        return redirect()->back()->with(['success'=>'Ticket creato correttamente']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        return view('tickets.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        return view('tickets.edit',compact('ticket'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        $ticket->update([
            'object'=>$request->object,
            'description'=>$request->description
        ]);

        //salvataggio dell'immagine
        if($request->hasFile('image')){
            $path=$request->file('image')->storeAs('public/tickets/' .$ticket->id,'screenshot.jpg');
            $ticket->image=$path;
            $ticket->save();
        }
        
        return redirect()->back()->with(['success'=>'Ticket aggiornato correttamente']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        if($ticket->image){
            Storage::delete($ticket->image);
        }
        $ticket->delete();
        return redirect()->back()->with(['success'=>'Ticket eliminato correttamente']);
    }
}
