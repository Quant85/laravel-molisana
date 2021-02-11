@if ($prodotto['tipo'] == 'lunga')
    <section class="section-tipo">
      <h2 class="tipo-prodotto">{{$prodotto['titolo']}}</h2>
      <img src="{{$prodotto['src']}}" alt="">
      <!-- /.categoria-prodotto -->

    </section>      
  @endif