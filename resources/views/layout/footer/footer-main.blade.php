<div class="footer-main">
  <figure class="logo">
    <img src="{{asset('img/header/logo.png')}}" alt="logo della molisana">
  </figure>
  @include('layout.footer.footer-main-section', ['class'=> "footer-col sezione-1", 'sezione' => $footer['sezione-1']])
  @include('layout.footer.footer-main-section', ['class'=> "footer-col sezione-2", 'sezione' => $footer['sezione-2']])
  @include('layout.footer.info-azienda', ['class'=> "footer-col info-azienda", 'sezione' => $footer['sezione-3']])
</div>