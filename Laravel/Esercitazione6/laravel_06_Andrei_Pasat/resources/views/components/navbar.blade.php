<nav class="navbar navbar-expand-lg bg-body-tertiary ">
  <div class="container-fluid secondary-bg">
    <a class="navbar-brand" href="{{route('home')}}">
      <img src="{{asset('images/file.png')}}" alt="{{env('APP_NAME')}}" width="50" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        <a class="nav-link" href="{{route('servizi')}}">Servizi</a>
        <a class="nav-link" href="{{route('aboutUs')}}">About Us</a>
      </div>
    </div>
  </div>
</nav>