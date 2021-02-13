<nav class="navbar">
  <ul class="navbar-items">
    @foreach ($pages as $key => $item)
        <li><a class="{{Route::currentRouteName() === $key ? 'active' :''}}" href="{{route($item)}}">{{$key}}</a></li>
    @endforeach
  </ul>
</nav>