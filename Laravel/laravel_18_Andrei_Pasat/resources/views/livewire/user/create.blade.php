<div>
    <br>
    <h2>Crea Utente</h2>

    @if(session()->has('success'))
    <div class="alert alert-success" rule="alert">
        {{session('success')}}
    </div>
    @endif

    <form wire:submit.prevent="store">
        <div class="mb-3">
          <label  class="form-label">Email address</label>
          <input type="email" class="form-control" wire:model.change="email">
          <div class="form-text">We'll never share your email with anyone else.</div>
            @error('email')
                <span class="small text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label  class="form-label">Name</label>
            <input type="text" class="form-control" wire:model.change="name">
            <div class="form-text">We'll never share your email with anyone else.</div>
            @error('name')
            <span class="small text-danger">{{$message}}</span>
            @enderror
          </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" wire:model.live="password">
          @error('password')
                <span class="small text-danger">{{$message}}</span>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
