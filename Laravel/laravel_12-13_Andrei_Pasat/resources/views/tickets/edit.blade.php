<x-app>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
        {{session('success')}}
        </div>
    @endif
    <form method="POST" action="{{route('tickets.update',$ticket)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label class="form-label">Object</label>
          <input type="text" name="object" class="form-control" value="{{old('object',$ticket->object)}}">
          
          @error('object')
          <div class="alert alert-danger" role="alert">
            {{$message}}
          </div>
          @enderror
        </div>
        
        <div class="form-floating">          
          <textarea type="text" name="description" class="form-control" style="height: 125px" {{old('description',$ticket->description)}}></textarea>
          <label class="form-label">Description</label>
          
          @error('description')
          <div class="alert alert-danger" role="alert">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="input-group mb-3">
            <label class="input-group-text">Screenshot</label>
            <input type="file" class="form-control" name="image">
        @error('image')
          <div class="alert alert-danger" role="alert">
            {{$message}}
          </div>
        @enderror
        </div>

        <div>
            <h3>Immagine Attuale</h3>
            <img src="{{Storage::url('$ticket->image')}}" alt="">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</x-app>