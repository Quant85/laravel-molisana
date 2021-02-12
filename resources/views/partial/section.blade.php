<section class="section-tipo">
  <h2 class="tipo-prodotto">@yield('titolo-prodotto')</h2>
  <div class="container-prodotti">
    @foreach ($prodotti['data'] as $prodotto)
      @if ($prodotto['tipo'] == 'lunga')
        @include('partial.prodotto')
        <!-- /.tipo-prodotto -->
      @endif
    @endforeach
  </div>
  <!-- /.prodotti -->
</section>  