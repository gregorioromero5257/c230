
@extends('layouts.site')

@section('content')

<section class="py-5-home">
  <div class="grid-banner-home">

    <div class="pd-text-b">
      <h1 class="text-white font-face-dpl s-one-ban-text">Diseñamos y ejecutamos
      estrategias que generan
      valor<b class="font-face-dpbl"> para la sociedad.</b></h1>

      <p class="text-white s-three-ban-text font-face-dp">
        Somos una firma de consultoría especializada en políticas
        públicas con amplia experiencia en México y América Latina.
      </p>
    </div>
    <img class="size-home-banner" src="img/home.jpg"/>

  </div>

  </section>

  <div class="grid-home">
    <div class="uno background-card-l">
      <button class="btn btn-titles ps-lg-8">
        <h3 class="font-face-dpbl text-color-letter-title s-two-text">QUÉ HACEMOS</h3>
      </button>
      <br>
      &nbsp;
      <div class="grid-one-into">
        <div class="one-grid-uno">
          <p class="ps-lg-8 s-four-text text-color-letter-content font-face-dp">
            Desde el año 2009, C230 Consultores ha ejecutado más de
            200 proyectos de consultoría y de investigación para el
            sector público, organizaciones internacionales,
            organismos multilaterales y empresas privadas de Norte
            América, América Latina, Europa y Asia.<br><br>
            Nuestra especialidad es diseñar herramientas y modelos
            de intervención que sean replicables a gran escala,
            mediante un enfoque de asistencia técnica.<br><br>
            Para ello, seguimos el siguiente proceso, en su totalidad
            o en parte: desarrollamos diagnósticos colaborativos con
            nuestros clientes y financiadores; aprovechamos las
            lecciones aprendidas de la experiencia nacional e
            internacional; co-diseñamos las soluciones a los
            problemas u objetivos planteados junto con las
            organizaciones implementadoras y grupos de interés;
            probamos las herramientas diseñadas mediante pilotos
            iterativos aplicando metodologías de trabajo ágil; y,
            finalmente, apoyamos en la implementación de éstas a
            través de, entre otros, la preparación de documentos de
            referencia (como protocolos y procedimientos) que
            permitan su aplicación de forma homogénea y adecuada.
          </p>
          <div class="ps-lg-8"
          style="padding-top: 10px;padding-bottom: 15px;"
          >
            <a class="btn btn-outline-white-fs-xl-0-n" href="{{ url('acerca')}}">Leer más <img src="img/Leer-mas.png" class="img-home-banner"> </a>
          </div>
        </div>
        <div class="dos">
          <br>
          <h3 class="font-face-dpbl text-color-letter-orange s-four-text">
            TEMÁTICAS DESTACADAS</h3>
          <br><br>
          <!-- Items -->
          <div class="grid-icon-tematics">

              <div class="icon-home-c">
                <img src="img/Iconos/uno.png" class="icono-home-size">
                <p class="s-five-text text-color-letter-icon font-face-dpm">Estado de <br>Derecho</p>
              </div>
              <div class="icon-home-c">
                <img src="img/Iconos/dos.png" class="icono-home-size">
                <p class="s-five-text text-color-letter-icon font-face-dpm">Salud y <br>bienestar</p>
              </div>
              <div class="icon-home-c">
                <img src="img/Iconos/tres.png" class="icono-home-size">
                <p class="s-five-text text-color-letter-icon font-face-dpm">Regulación,<br>competencia y <br>comercio</p>

              </div>
              <div class="icon-home-c">
                <img src="img/Iconos/cuatro.png" class="icono-home-size">
                <p class="s-five-text text-color-letter-icon font-face-dpm">Fortalecimiento <br>del sector público</p>

              </div>
              <div class="icon-home-c">
                <img src="img/Iconos/cinco.png" class="icono-home-size">
                <p class="s-five-text text-color-letter-icon font-face-dpm">Trabajo y capital <br>humano</p>

              </div>
              <div class="icon-home-c">
                <img src="img/Iconos/seis.png" class="icono-home-size">
                <p class="s-five-text text-color-letter-icon font-face-dpm">Cambio climático, <br>medio ambiente y <br>sustentabilidad</p>

              </div>
              <div class="icon-home-c">
                <img src="img/Iconos/siete.png" class="icono-home-size">
                <p class="s-five-text text-color-letter-icon font-face-dpm">Desarrollo urbano <br>y vivienda</p>
              </div>
              <div class="icon-home-c">
                <img src="img/Iconos/ocho.png" class="icono-home-size">
                <p class="s-five-text text-color-letter-icon font-face-dpm">Innovación, <br> ciencia y <br> tecnología</p>
              </div>
              <div class="icon-home-c">
                <img src="img/Iconos/nueve.png" class="icono-home-size">
                <p class="s-five-text text-color-letter-icon font-face-dpm">Desarrollo social y <br>migración</p>
              </div>

          </div>
          <!-- fin items -->
        </div>
      </div>

      <!-- <br> -->

    </div>
    <div class="tres" style="background-image:url(img/teamBN.jpg); background-repeat: round;"><h1>&nbsp;</h1></div>
    <div class="cuatro background-card-r">
      <button class="btn btn-titles pt-4">
      <h3 class="font-face-dpbl text-color-letter-title s-two-text">EQUIPO DIRECTIVO</h3>
    </button>
    <br>
    &nbsp;
    <div class="ps-lg-4">
      <p class="text-color-letter-content font-face-dp s-four-text pe-8">El liderazgo de C230 Consultores está integrado por un equipo multidisciplinario y diverso, con profunda experiencia en sector público y
        privado, y una sólida formación académica. Nuestro común denominador es el compromiso con el valor que generamos para nuestros
        clientes, y con el desarrollo profesional de todos los que formamos parte de esta firma.</p>
        <a class="btn btn-outline-white-fs-xl-0-n" href="{{ url('equipo')}}">Leer más <img src="img/Leer-mas.png" class="img-home-banner"> </a>
      </div>

    </div>

    <div class="cinco background-card-l">
      <button class="btn btn-titles">

        <h3 class="ps-lg-7 font-face-dpbl text-color-letter-title s-two-text">PROYECTOS DESTACADOS</h3>
      </button>
      <br>
      &nbsp;
      <div class="grid-project-cards ps-lg-8">


          <div class="card card-home">
            <div class="card-body">
              <!-- <img src="img/Proyectos-Proyecto2.png" class="icono-header-card"> -->
              @if(isset($data[0]) == true)
              @foreach ($data[0]['tematics_web'] as $key_w => $value_w)
              <span class="badge badge-info" style="background:#508bb1;">{{$value_w['name']}}</span>
              @endforeach
              <h3 class="text-color-letter-title mt-3 font-face-dpbl s-four-text">
                {!! json_decode($data[0]['project_title'])->title_es !!}
              </h3>
              <div class="text-color-letter-content font-face-dp s-three-text">
                {!! json_decode($data[0]['project_resumen'])->resumen_es !!}

              </div>
              <a href="{{url('/proyectos/'.$data[0]['id'])}}" class="stretched-link"></a>
              @endif
            </div>
          </div>


          <div class="card card-home">
            <div class="card-body">

              @if(isset($data[1]) == true)
              @foreach ($data[1]['tematics_web'] as $key_w => $value_w)
              <span class="badge badge-info" style="background:#508bb1;">{{$value_w['name']}}</span>
              @endforeach
              <h3 class="text-color-letter-title mt-3 font-face-dpbl s-four-text">
                {!! json_decode($data[1]['project_title'])->title_es !!}
              </h3>
              <div class="text-color-letter-content font-face-dp s-four-text">
                {!! json_decode($data[1]['project_resumen'])->resumen_es !!}
              </div>
              <a href="{{url('/proyectos/'.$data[1]['id'])}}" class="stretched-link"></a>
              @endif
              <!-- <img src="img/Proyectos-Proyecto1.png" class="icono-header-card"> -->
              <!-- <h3 class="text-color-letter-title mt-3 font-face-dpbl s-four-text">
                Implementación del programa Ciudades del Futuro (Future Cities)
              </h3>
              <p class="text-color-letter-content font-face-dp s-four-text">
                Ciudades del Futuro es un programa financiado por el Prosperity Fund del Reino Unido. El objetivo de Ciudades del Futuro es desarrollar soluciones para la movilidad urbana sostenible en México, para crear ciudades más resilientes, seguras e inclusivas, especialmente para mujeres y niñas. El programa colabora con cinco ciudades: Ciudad de México, Monterrey, Guadalajara, Hermosillo y Querétaro.
              </p> -->
            </div>
          </div>


          <div class="card card-home">
            <div class="card-body">
              @if(isset($data[2]) == true)
              @foreach ($data[2]['tematics_web'] as $key_w => $value_w)
              <span class="badge badge-info" style="background:#508bb1;">{{$value_w['name']}}</span>
              @endforeach
              <h3 class="text-color-letter-title mt-3 font-face-dpbl s-four-text">
                {!! json_decode($data[2]['project_title'])->title_es !!}
              </h3>
              <div class="text-color-letter-content font-face-dp s-four-text">
                {!! json_decode($data[2]['project_resumen'])->resumen_es !!}
              </div>
              <a href="{{url('/proyectos/'.$data[2]['id'])}}" class="stretched-link"></a>
              @endif
              <!-- <img src="img/Proyectos-proyecto3.png" class="icono-header-card"> -->
              <!-- <h3 class="text-color-letter-title mt-3 font-face-dpbl s-four-text">Aprendizaje sobre financiamiento y acción climática</h3>
              <p class="text-color-letter-content font-face-dp s-four-text">
                C230 Consultores apoyó la implementación del laboratorio de aprendizaje sobre financiamiento y acción climática de los Climate Investment Funds,
                el cual incluyó la facilitación de grupos de trabajo sobre métodos y métricas del cambio transformacional, energía limpia y transición energética, resiliencia y ecosistemas.
                Esta estrategia es conocida como Transformational Change Learning Partnership.
              </p> -->
            </div>
          </div>

          <div class="card card-vacancies-empty-sb">
            <div class="card-body" style="align-self: center;">
              <br>
                <a class="btn btn-outline-white-fs-xl-0-n " href="{{ url('proyectos')}}">Leer más <img src="img/Leer-mas.png" class="img-home-banner"></a>
                <br>
                <br>
            </div>
          </div>

      </div>
    </div>
    <div class="seis py-2">
      <h3 class="font-face-dpbl text-color-letter-title s-three-text">VACANTES</h3>
      <p class="text-color-letter-content font-face-dp s-four-text">Estamos constantemente en búsqueda de talento.
        Si estas interesado en ingresar a C230 Consultores, revisa nuestras vacantes:</p>
        <a href="{{url('vacantes')}}" style="text-decoration : none;" class="btn btn-outline-white-fs-xl-0-n">Leer más <img src="img/Leer-mas.png" class="img-home-banner"> </a>
      </div>
    </div>

    @endsection
