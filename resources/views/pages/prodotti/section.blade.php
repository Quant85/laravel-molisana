
<section class="section-tipo">
  <h2 class="tipo-prodotto">{{$title}}</h2>
  <div class="container-prodotti">
    @foreach ($prodotti['data'] as $prodotto)
      @if ($prodotto['tipo'] == $tipo)
        @include('pages.prodotti.prodotto')
        <!-- /.tipo-prodotto -->
      @endif
    @endforeach
  </div>
  <!-- /.prodotti -->
</section>  