<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid header-border">
      <a class="navbar-brand ml-3 font-typo" href="/"><img src="{{asset('assets/logo.png')}}" class="logo" alt="" height="50px" width="100px">
      <label style=" font-size: 25px">Just Du It !</label></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      {{-- Jika Guest --}}
        @if(!Auth::User())
        <form class="d-flex" style="margin-right: 5%" >
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active mr-4" aria-current="page" href="login">Login</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link mr-4" href="register">Register</a>
                </li>
                </ul>
            </div>
        </form>
        @else
        <form class="d-flex" style="margin-right: 5%" >
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{Auth::User()->username}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        </ul>
                      </li>
                </ul>
            </div>
        </form>
        @endif
    </div>

  </nav>