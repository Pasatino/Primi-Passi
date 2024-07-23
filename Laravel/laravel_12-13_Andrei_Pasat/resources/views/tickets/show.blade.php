<x-app>

    <div class="row">

        <div class="row">
            <div class="col-6">
                <h2>{{$ticket->category->title}}</h2>
            </div>
        </div>    
        
        <div class="col-12">
            <h2>{{$ticket->object}}</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <h3>{{$ticket->description}}</h3>
        </div>
    </div>

    


@empty($ticket->image)
    <h2>nessuna immagine</h2>
@else
    <div class="row">
        <div class="col-6">
            <img src="{{Storage::url($ticket->image)}}">
        </div>
    </div>
@endempty
    

</x-app>