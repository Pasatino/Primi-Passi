<x-app>

    <form method='POST' action='/login'>
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
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password" >
        
        @error('password')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>    
        
        @enderror
      </div>
      
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" name="remember">
    <label class="form-check-label">Check me out</label>
  </div>
    
    </x-app>