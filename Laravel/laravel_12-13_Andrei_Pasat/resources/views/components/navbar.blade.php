<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        
        @auth
            
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao {{auth()->user()->name}}
          </a>
          <ul class="dropdown-menu">

            <li><a class="dropdown-item" href="{{route('tickets.create')}}">Crea Ticket
              </a></li>
            <li><a class="dropdown-item" href="{{route('tickets.index')}}">Lista Ticket
              </a></li>

            <li><a class="dropdown-item" href="#" onclick="event.preventDefault();getElementById('form-logout').submit();">Logout</a>
              
              <form id="form-logout" action="/logout" method="POST" class="d-none">
              @csrf
              </form>

            </li>
            
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        @endauth
        
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>