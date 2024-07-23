<x-app>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Object</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($tickets as $ticket)
            
            <tr>
              <th scope="row">{{$ticket->id}}</th>
              <td>{{$ticket->object}}</td>
              <td>{{$ticket->category->title}}</td>
              <td>

                <a href="{{route('tickets.show',$ticket)}}" class="btn btn-outline-primary">Vedi</a>
                <a href="{{route('tickets.edit',$ticket)}}" class="btn btn-outline-success">Modifica</a>
                
                
                <form method="POST" action="{{route('tickets.destroy',$ticket)}}">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger" onclick="alert('Sei sicuro di voler eliminare il ticket?')">Elimina</button>
                </form>
                

              </td>
            </tr>
            @endforeach
        </tbody> 
    </table>        
</x-app>