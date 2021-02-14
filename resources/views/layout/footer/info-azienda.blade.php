<ul class="{{$class}}">
  @foreach ($sezione['info'] as $name => $item)
    <li>
      <span class="info-name">{{$name}} :</span> 
      <span>{{$item}}</span>
    </li>
  @endforeach
    <li>
      <span>per segnalazioni scrivere a: 
        <a href="mailto:{{$sezione['contatti-azienda']['email-segnalazioni']}}">{{$sezione['contatti-azienda']['email-segnalazioni']}}</a>
      </span>
    </li>
    <li>
      <span>per contattare l'area commerciale: 
        <a href="mailto:{{$sezione['contatti-azienda']['email-commerciale']}}">{{$sezione['contatti-azienda']['email-commerciale']}}</a>
      </span>
    </li>
    <li>
      <span>per contattare l'area export: 
        <a href="mailto:{{$sezione['contatti-azienda']['email-export']}}">{{$sezione['contatti-azienda']['email-export']}}</a>
      </span>
    </li>
    <li>
      <span>dati aziendali: 
        <a href="{{$sezione['contatti-azienda']['dati-aziendali']}}">leggi di più</a>
      </span>
    </li>
    <li class="box-number">
        <a href="tel:{{$sezione['contatti-azienda']['numero-verde']}}">
          <img src="{{asset('img/footer/numero-verde.jpg')}}" alt="{{$sezione['contatti-azienda']['numero-verde']}}">
        </a>
    </li>
    <a href="tel:{{$sezione['contatti-azienda']['whatsapp']}}">
      <img src="{{asset('img/footer/whatsapp.jpg')}}" alt="{{$sezione['contatti-azienda']['whatsapp']}}">
    </a>
    <li>
    </li>
</ul>