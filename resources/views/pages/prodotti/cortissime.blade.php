<section class="section-tipo">
  <h2 class="tipo-prodotto">LE CORTISSIME</h2>
  @foreach ($prodotti['data'] as $prodotto)
    @if ($prodotto['tipo'] == 'cortissima')
      <img src="{{$prodotto['src']}}" alt="{{$prodotto['titolo']}}">
      <!-- /.categoria-prodotto -->
    @endif
  @endforeach
</section>  