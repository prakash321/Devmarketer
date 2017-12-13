<nav class="nav has-shadow">
  <div class="container">
      <div class="nav-left">
    <a class="nav-item" href="{{route('home')}}">
<img src="{{asset('images/devmarketer-logo.png')}}" alt="dev merketer logo"/>
    </a>
  <a href="#" class="nav-item is-tab is-hidden-mobile m-l-10"> Learn</a>
    <a href="#" class="nav-item is-tab is-hidden-mobile"> Discuss</a>
    <a href="#" class="nav-item is-tab is-hidden-mobile"> Share</a>
    </div>

  <div class="nav-right" style="overflow: visible; float: right; margin-bottom: 5px; ">
  @if (Auth::guest())
<a href="{{route('login')}}" class="nav-item m-r-10 is-tab">Login</a>
<a href="{{route('register')}}" class="nav-item is-tab"> Join the community</a>
  @else
  <button class="dropdown is-aligned-right nav-item  is-open is-tab">
    Hey  {{Auth::user()->name }}
    <ul class="dropdown-menu" style="overflow: visible;">
      <li><a href="#">
          <span class="icon"><i class="fa fa-fw m-r-15 fa-user-circle-o"></i></span>
        Porfile</a></li>
      <li><a href="#">
        <span class="icon"><i class="fa fa-fw  m-r-15 fa-bell"></i></span>
        Notifications</a></li>
      <li><a href="{{route('manage.dashboard')}}">
        <span class="icon"><i class="fa fa-fw  m-r-15 fa-cog"></i></span>
        Manage</a></li>
      <li class="seperator"></li>
      <li><a href="{{route('logout')}}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        <span class="icon"><i class="fa fa-fw   m-r-15 fa-sign-out"></i></span>
        Logout</a>
@include('_includes.forms.logout')
      </li>

      </ul>

  </button>
  @endif

    </div>
  </div>
</nav>
