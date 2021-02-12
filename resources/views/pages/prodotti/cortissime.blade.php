
<section class="section-tipo">
  <h2 class="tipo-prodotto">LE CORTISSIME</h2>
  <div class="container-prodotti">
    @foreach ($prodotti['data'] as $prodotto)
      @if ($prodotto['tipo'] == 'cortissima')
        @include('partial.prodotto')
        <!-- /.tipo-prodotto -->
      @endif
    @endforeach
  </div>
  <!-- /.prodotti -->
</section>  