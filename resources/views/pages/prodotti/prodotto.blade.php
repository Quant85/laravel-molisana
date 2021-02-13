
<div class="card-prodotto">
  <img class="img-prodotto" src="{{$prodotto['src']}}" alt="{{$prodotto['titolo']}}">
  <!-- <div class="info-prodotto"></div> -->
  <!-- /.description -->
  <ul class="info-prodotto">
    <li><img class="icon-prodotto" src="/img/prodotti/main/icon.svg" alt=""></li>
    <li>
      <a class="title-prodotto" href="{{ route('prodotto', $id)}}">{{$prodotto['titolo']}}</a>
    </li>
    <li><span>tipo: </span>{{$prodotto['tipo']}}</li>
    <li><span>tempo di cottura: </span>{{$prodotto['cottura']}}</li>
    <li><span>confezione da: </span>{{$prodotto['peso']}}</li>
  </ul>
  <!-- /.info-prodotto -->
</div>
<!-- /.card-prodotto -->