<x-layout>
  <div class="row my-5 plus-jakarta-sans">
    @session('success')
    <div class="alert bg-primary plus-jakarta-sans" role="alert">
        {{session('success')}}
      </div>
    @endsession
    <div class="col-2">
      <a href="{{route('authors.create')}}" class="btn btn-primary">Create a new author</a>
    </div>
  </div>
<div class="row plus-jakarta-sans" data-bs-theme="dark">
  <div class="col-12">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Surename</th>
          <th scope="col">Date</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($authors as $author)
      <tr>
          <th scope="row">{{$author->id}}</th>
          <td>{{$author->name}}</td>
          <td>{{$author->surename}}</td>
          <td>{{$author->dateN}}</td>
          <td>
            <form method="POST" action="{{route('authors.destroy', $author)}}">
              <a href="{{route('authors.show', $author)}}" class="btn btn-primary">Show</a>
              <a href="{{route('authors.edit', $author)}}" class="btn btn-primary">Edit</a>
              @csrf
              @method('DELETE')
              <button type="submit" onclick="alert('Are you sure?')" class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
        
      </tbody>
    </table>
  </div>
</div>
    

</x-layout>