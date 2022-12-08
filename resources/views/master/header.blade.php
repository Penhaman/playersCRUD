<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ url('players') }}">
        <img src="https://upload.wikimedia.org/wikipedia/commons/5/5a/S%C3%ADmbolo_da_Liga_Portuguesa_de_Futebol_Profissional.png" width="60" height="40" alt="">
      </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ request()->is('players') ? 'active' : '' }}">
          <a class="nav-link" href="{{url('players')}}">Players List</a>
        </li>
        <li class="nav-item {{ request()->is('*create*') ? 'active' : '' }}">
          <a class="nav-link" href="{{url('players/create')}}">Add Player</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>