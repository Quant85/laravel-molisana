

<section class="section-tipo">
  <h2 class="tipo-prodotto">LE LUNGHE</h2>
  @foreach ($prodotti['data'] as $prodotto)
    @if ($prodotto['tipo'] == 'lunga')
      <img src="{{$prodotto['src']}}" alt="{{$prodotto['titolo']}}">
      <!-- /.categoria-prodotto -->
    @endif
  @endforeach
</section>  