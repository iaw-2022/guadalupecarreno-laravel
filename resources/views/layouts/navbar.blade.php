<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand">      
      <b>&#127937 TOMBA RACING</b>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/autos">   Autos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/tareas">  Tareas</a>
        </li>
      </ul>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <x-dropdown-link class="btn btn-info" :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
      </form>
    </div>
  </div>
</nav>