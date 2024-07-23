<x-app>

<form method='POST' action='/register'>
    @csrf
  
    <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" value="{{old('email')}}">
    
    @error('email')
    <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>  
    
      @enderror
  </div>
  
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="{{old('name')}}">
    
    @error('name')
    <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>    
    
      @enderror
  </div>
  
  <div class="mb-3">
    <label class="form-label">Surname</label>
    <input type="text" class="form-control" name="surname" value="{{old('surname')}}">
    
    @error('surname')
    <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>    
    
      @enderror
  </div>
  
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password" >
    
    @error('password')
    <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>    
    
      @enderror
  </div>
  
  <div class="mb-3">
    <label class="form-label">Conferma Password</label>
    <input type="password" class="form-control" name="password_confirmation">
  </div>
  <button type="submit" class="btn btn-primary">Crea Account</button>
</form>

</x-app>