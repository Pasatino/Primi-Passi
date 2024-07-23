<div>
    <br>
    <h2>Modifica Utente</h2>

    @if(session()->has('success'))
    <div class="alert alert-success" rule="alert">
        {{session('success')}}
    </div>
    @endif

    <form wire:submit.prevent="update">
        <div class="mb-3">
          <label  class="form-label">Email address</label>
          <input type="email" class="form-control" wire:model.change="form.email">
          <div class="form-text">We'll never share your email with anyone else.</div>
            @error('form.email')
                <span class="small text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label  class="form-label">Name</label>
            <input type="text" class="form-control" wire:model.change="form.name">
            <div class="form-text">We'll never share your email with anyone else.</div>
            @error('form.name')
            <span class="small text-danger">{{$message}}</span>
            @enderror
          </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" wire:model.live="form.password">
          @error('form.password')
                <span class="small text-danger">{{$message}}</span>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Modifica</button>
      </form>
</div>
