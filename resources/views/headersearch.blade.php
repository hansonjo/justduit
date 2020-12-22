<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid header-border">
      <a class="navbar-brand ml-3 font-typo"  href="/"><img src="{{asset('assets/logo.png')}}" class="logo" alt="" height="50px" width="100px">
      <label style=" font-size: 25px">Just Du It !</label></a>
      <form action="/search">
      <div style="display:flex">
            @csrf
            <div class="col-sm-12">
            <input type="text" class="form-control" name="search" placeholder="Search"  value="{{ Request::input('search') }}">
            </div>
            <div style="margin-left:2%"><button type="submit" class="btn btn-primary">Search</button></div>
        </form>
      </div>
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