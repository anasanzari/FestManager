<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      @if($user)
        <a  class="navbar-brand" href="{{url('/dashboard')}}">FestManager</a>
      @else
        <a class="navbar-brand"  href="{{url('/')}}">FestManager</a>
      @endif
    </div

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        @if($user)
          <li><a href="{{url('/dashboard')}}">Home</a></li>
        @else
          <li><a href="{{url('/')}}">Home</a></li>
        @endif

        @if($user)
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Profile</a></li>
              <li><a href="{{url('/events')}}">Events</a></li>
              <li><a href="{{url('auth/logout')}}">Logout</a></li>
            </ul>
          </li>
        @endif

      </ul>
    </div>
  </div>
</nav>
