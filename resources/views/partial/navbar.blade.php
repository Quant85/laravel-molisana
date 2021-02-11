<nav class="navbar">
  <ul class="navbar-items">
    @foreach ($pages as $key => $item)
        <li><a href="{{$item}}">{{$key}}</a></li>
    @endforeach
  </ul>
</nav>