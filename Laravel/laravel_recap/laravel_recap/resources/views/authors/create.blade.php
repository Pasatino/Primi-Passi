<x-layout>
<div class="row my-5">
    @session('success')
    <div class="alert bg-primary plus-jakarta-sans" role="alert">
        {{session('success')}}
      </div>
    @endsession
    <div class="col-12">
        <form action="{{route('authors.store')}}" method="POST" >
            @csrf
            <div class="mb-3">
              <label class="form-label">Name</label>
              <input type="text" name='name' class="form-control">
              @error('name')
                <div class="alert bg-danger plus-jakarta-sans mt-2" role="alert">
                    {{$message}}
                </div>
              @enderror
            </div>
    
            <div class="mb-3">
                <label class="form-label">Surname</label>
                <input type="text" name='surname' class="form-control">
                @error('surname')
                    <div class="alert bg-danger plus-jakarta-sans mt-2" role="alert">
                        {{$message}}
                    </div>
                @enderror
              </div>
    
            <div class="mb-3">
              <label class="form-label">Birth</label>
              <input type="date" name='dateN' class="form-control">
              @error('dateN')
              <div class="alert bg-danger plus-jakarta-sans mt-2" role="alert">
                {{$message}}
              </div>
              @enderror
            </div>
    
            <div class="mb-3">
                <label class="form-label">Link</label>
                <input type="link" name='link' class="form-control">
                @error('link')
              <div class="alert bg-danger plus-jakarta-sans mt-2" role="alert">
                {{$message}}
              </div>
              @enderror
              </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
    

</x-layout>