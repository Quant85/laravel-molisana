<ul class="{{$class}}">
  @foreach ($sezione as $key => $item)
    <li>
        <h2 class="title-section">{{$key}}</h2>
        <ul class="{{$key}}">
        @foreach ($item as $name => $value)
          <li>
            <a href="{{$value}}">{{$name}}</a>
          </li>
          @endforeach
        </ul>
      </li>
  @endforeach
</ul>