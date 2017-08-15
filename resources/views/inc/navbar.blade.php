<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">

      <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

      <!-- Branding Image -->
        <a class="navbar-brand" href="{{ url('/') }}">
          {{ config('app.name', 'Laravel') }}
        </a>
    </div>

    <div class="collapse navbar-collapse" id="app-navbar-collapse">
    <!-- Left Side Of Navbar -->
      <ul class="nav navbar-nav">
        &nbsp;
      </ul>

      <ul class="nav navbar-nav">
        <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
          <li><a href="/about"><i class="fa fa-pencil" aria-hidden="true"></i> About</a></li>
          <li><a href="/services"><i class="fa fa-briefcase" aria-hidden="true"></i> Services</a></li>
          <li><a href="/posts"><i class="fa fa-book" aria-hidden="true"></i> Blog</a></li>
      </ul>

    <!-- Right Side Of Navbar -->
      <ul class="nav navbar-nav navbar-right">
      <!-- Authentication Links -->
        @if (Auth::guest())
          <li><a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>
 Login</a></li>
          <li><a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i>
 Register</a></li>
        @else
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              <i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
              <li><a href="/dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
              <li>
                <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                  <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav>