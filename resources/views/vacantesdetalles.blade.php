@extends('layouts.site')

@section('content')
<section class="py-5-vacancies-details">
  <div class="grid-banner-home">
    <div class="pd-text-b">
      <h1 class="font-face-dpbl text-color-letter-orange s-two-text">Vacante:</h1>
      <h1 class="font-face-dp text-color-letter-title s-two-text">{{$data[0]['name']}}</h1>
      <p class="text-color-letter-content s-four-text font-face-dp">
        {{$data[0]['short_description']}}
        <br><br>
      <!-- </p> -->
      <!-- <p class="text-color-letter-content fs-p fw-medium resposive-size"> -->
        <img src="../img/sas.png" class="img-home-banner">
         <b>Vigencia:
           @if(is_null($data[0]['validity']))
           Vacante de proceso continuo
           @else
           hasta el {{date_format(date_create($data[0]['validity']),"d/m/Y")}}
           @endif
         </b>
        </p>
    </div>
    <img class="size-home-banner" src="../img/Vacantes-web.jpg"/>
  </div>
</section>


<!-- <section> -->
<div class="container" style="background-color: #f9f9f9;">
  <div class="grid-vacantes-detalles">
    <div class="tres-gvd">
      <label>&nbsp;</label>
    </div>
    <div class="uno-gvd">

      <div class="card card-vacancies-empty-sb">
        <div class="card-body">
          <div class="px-2 align-items-center">
            <h3 class="text-color-letter-orange font-face-dpbl s-four-text">Requisitos</h3>
            <div class="px-4 text-color-letter-content s-four-text font-face-dp" >
              {!! $data[0]['requirements'] !!}
            </div>
          </div>
        </div>
      </div>
      <div class="card card-vacancies-empty-sb">
        <div class="card-body">
          <div class="px-2 align-items-center">
            <h3 class="text-color-letter-orange font-face-dpbl s-four-text">Experiencia y conocimientos deseables</h3>
            <div class="px-4 text-color-letter-content s-four-text font-face-dp" >
              {!! $data[0]['experience'] !!}
            </div>
          </div>
        </div>
      </div>
      <div class="card card-vacancies-empty-sb">
        <div class="card-body">
          <div class="px-2 align-items-center">
            <h3 class="text-color-letter-orange font-face-dpbl s-four-text">??Qu?? ofrecemos?</h3>
            <div class="px-4 text-color-letter-content s-four-text font-face-dp" >
              {!! $data[0]['offer'] !!}
            </div>
          </div>
        </div>
      </div>

      <div class="card card-vacancies-empty-sb">
        <div class="card-body">
          <div class="card card-vacancies px">
            <div class="card-body">
              <p class="text-color-letter-content font-face-dp s-four-text">
                Aplica enviando tu CV (sin foto) a <a href="mailto:reclutamiento@c-230.com?Subject=Interes vacante {{$data[0]['name']}}"
                 target="_blank" class="text-color-letter-orange font-face-dpbl s-four-text">reclutamiento<span class="font-arroba">@</span>c-230.com</a>, mencionando
                en el asunto del correo la posici??n a la que est??s aplicando. A la brevedad
                recibir??s respuesta de nuestra parte.
              </p>
            </div>
          </div>
          @if($data[0]['type'] == 1 || $data[0]['type'] == 2 || $data[0]['type'] == 3 || $data[0]['type'] == 4)
          <p class="pt-2 text-color-letter-content font-face-dp s-four-text">Solicitar un empleo o emprender un nuevo rumbo profesional implica un gran
esfuerzo y presionar "Enviar" en la solicitud puede ser intimidante, lo sabemos y
aspiramos a que el proceso sea lo m??s sencillo posible, as?? que te invitamos a
consultar la infograf??a de nuestro proceso de reclutamiento.</p>
@endif
<div class="row">
  <div class="col-md-12 mb-5 mb-md-0">
    @if($data[0]['type'] == 1)
    <div class="pt-4-n">
    <img src="../img/04.png" class="img-process zoom">
    </div>
    @elseif($data[0]['type'] == 2)
    <div class="pt-4-n">
    <img src="../img/03.png" class="img-process zoom">
    </div>
    @elseif($data[0]['type'] == 3)
    <div class="pt-4-n">
    <img src="../img/01.png" class="img-process zoom">
    </div>
    @elseif($data[0]['type'] == 4)
    <div class="pt-4-n">
    <img src="../img/02.png" class="img-process zoom">
    </div>
    @endif

  </div>
</div>

        </div>
      </div>



    </div>
    <div class="dos-gvd">

      <div class="card card-vacancies-empty" >
        <div class="card-body" style="padding-right: 2rem;">
          <!-- <div class="px-2"> -->
            <div class="text-center">
              <img src="../img/iuvenia.png" class="img-size-vacancy-one">
            </div>
            <p class="ps-sm-4 text-color-letter-content font-face-dp s-five-text text-lg-justify">
              <b>C230 Consultores</b> le otorgaron el distintivo
              IUVENIA para Empresas Amigas de los J??venes,
              por ser una organizaci??n l??der en pol??ticas de
              Recursos Humanos, que atrae al mejor talento,
              invierte en ??l y desarrolla a su gente.
            </p>
            <div class="text-center">
              <img src="../img/Sello-Dec??logo.png" class="img-size-vacancy-two">
            </div>
            <p>&nbsp;</p>
            <p class="ps-sm-4 text-color-letter-content font-face-dp s-five-text text-lg-justify">
              <b>C230 Consultores</b> adopt?? el cat??logo de
              buenas pr??cticas de inclusi??n laboral orientadas
              a j??venes difundido por la Alianza J??venes con
              Trabajo Digno
            </p>

          <!-- </div> -->
        </div>
      </div>
      <br>
      <div class="card card-vacancies-empty">
        <div class="card-body" style="padding-right: 2rem;">
          <p class="ps-sm-4 text-color-letter-content font-face-dp s-five-text text-lg-justify">
              En <b>C230 Consultores</b> queda estrictamente
              prohibida cualquier forma de maltrato, violencia,
              discriminaci??n y segregaci??n en materia de:
              apariencia f??sica, cultura, discapacidad, idioma,
              sexo, g??nero, edad, condici??n social, econ??mica,
              de salud o jur??dica, embarazo, estado civil o
              conyugal, religi??n, origen ??tnico o nacional y
              orientaci??n sexual.
          </p>
          <p class="ps-sm-4 text-color-letter-content font-face-dp s-five-text text-lg-justify">
            <b>C230 Consultores</b> mantiene los m??s altos
            est??ndares ??ticos. Estamos comprometidos y
            comprometidas con la prevenci??n de la
            explotaci??n, el abuso y el acoso sexuales, as??
            como con otras infracciones ??ticas.
          </p>
          <br>
          <a href="https://c-230.com/images/C230%20Poli%CC%81tica%20de%20E%CC%81tica%20y%20Conflictos%20de%20Intere%CC%81s-protegido.pdf" target="_blank" class="ps-sm-4 text-color-letter-content font-face-dp s-five-text">
            <b>POL??TICA DE ??TICA Y CONFLICTOS DE INTER??S</b>
          </a><br><br>
          <a href="{{ url('/avisoprivacidad')}}" class="ps-sm-4 text-color-letter-content font-face-dp s-five-text">
            <b>AVISO DE PRIVACIDAD</b>
          </a>
        </div>
      </div>

    </div>
  </div>
<!--  -->
<br>
</div>
<!-- </section> -->
@endsection
