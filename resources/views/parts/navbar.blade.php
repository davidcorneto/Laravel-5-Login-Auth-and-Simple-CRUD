<nav class="light-green darken-1">
    <div class="nav-wrapper container">
      <a href="{{url('/')}}" class="brand-logo">Nature Travel</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        @if(Auth::guest())
          <li><a href="{{url('login')}}">Login</a></li>
          <li><a href="{{url('register')}}">Register</a></li>
        @else
          <li><a href="{{url('/')}}">Home</a></li>
          <li>
            <a href="{{url('logout')}}">Logout</a>
          </li>
        @endif

      </ul>
      <ul class="side-nav" id="mobile-demo">
        @if(Auth::guest())
          <li><a href="{{url('login')}}">Login</a></li>
          <li><a href="{{url('register')}}">Register</a></li>
        @else
          <li><a href="{{url('/')}}">Home</a></li>
          <li>
            <a href="{{url('logout')}}">Logout</a>
          </li>
        @endif
      </ul>
    </div>
  </nav>
