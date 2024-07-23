
    <div>
        
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Search</span>
            <input type="text" class="form-control" wire:model.live="q">
          </div>

        {{$users->links()}}
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                      <a href="{{route('show',$user)}}" class="btn btn-primary">Show</a>
                      <a href="{{route('edit',$user)}}" class="btn btn-secondary">Edit</a>
                      <button class="btn btn-danger" wire:click="delete({{$user}})">Delete</button>
                    </td>
                  </tr> 
                @endforeach
              
            </tbody>
          </table>
    </div>
