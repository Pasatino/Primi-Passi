<x-layout>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($brands as $brand)
            
            <tr>
              <th scope="row">{{$brand->id}}</th>
              <td>{{$brand->name}}</td>
              
            </tr>

            <td>
              <a href="{{route('brands.show',$brand)}}" class="btn btn-outline-primary">Show</a>
              <a href="{{route('brands.edit',$brand)}}" class="btn btn-outline-secondary">Edit</a>
              <form action="{{route('brands.destroy',$brand)}}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-outline-danger">Delete</button>
              </form>
            </td>
            @endforeach
        </tbody> 
    </table>
</x-layout>