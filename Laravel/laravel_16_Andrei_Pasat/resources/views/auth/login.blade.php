<x-layout>    
      <div class="d-flex justify-content-center align-items-center p-5">
        <div class="justify-content-center align-items-center p-5">
        <form action="{{route('login')}}" method="POST">
            @csrf
        
            
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" value="{{old('email')}}">
                    <div class="form-text">We'll never share your email with anyone else.</div>
                  </div>
                  @error('email')
                              <span class="text-danger">{{$message}}</span>
                  @enderror
              
                  <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                  </div>
                  @error('password')
                      <span class="text-danger">{{$message}}</span>
                  @enderror
              
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="remember">
                    <label class="form-check-label">Check me out</label>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
      </div>
</x-layout>