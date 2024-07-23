<x-layout>
    <h1 class="text-black">Register a new account</h1>

    <form method="POST" action="{{route('register')}}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name='email'>
            @error('email')
                <div class="alert bg-danger plus-jakarta-sans mt-2" role="alert">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
            @error('password')
                <div class="alert bg-danger plus-jakarta-sans mt-2" role="alert">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="remember">
            <label class="form-check-label">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

</x-layout>