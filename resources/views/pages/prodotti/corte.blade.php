<section class="section-tipo">
  <h2 class="tipo-prodotto">LE CORTE</h2>
  @foreach ($prodotti as $prodotto)
    @if ($prodotto['tipo'] == 'corta')
      <img src="{{$prodotto['src']}}" alt="{{$prodotto['titolo']}}">
      <!-- /.categoria-prodotto -->
    @endif
  @endforeach
</section>  