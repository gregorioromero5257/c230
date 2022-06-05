zlwI-V1;1d~g
@extends('layouts.site')

@section('content')

<section class="py-5-home">
  <!-- <div class="container"> -->
    <div>
      <img class="size-home-banner" src="img/home.jpg"/>
      <div class="pd-text-b">
        <h1 class="text-white fw-light s-one-text position-text cxy-title resposive-size">Diseñamos y ejecutamos<br>
          estrategias que generan<br>valor<b class="fw-medium"> para la sociedad.</b></h1>
          <p class="text-white s-three-text fw-medium position-text cxy-sub resposive-size">
            Somos una firma de consultoría especializada en políticas <br>
            públicas con amplia experiencia en México y América Latina.
          </p>
      </div>
    </div>
  <!-- </div> -->
</section>

  <!-- <section class="py-5-home overflow-hidden">
  <div class="recolor w-50 bg-right" style="background-image:url(img/Home.jpg);">
  </div>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-8 text-left pd-text-b ">

        <h1 class="text-white fw-light resposive-size s-one-text">Diseñamos y ejecutamos<br>
          estrategias que generan<br>valor<b class="fw-medium"> para la sociedad.</b></h1>
          <p class="text-white s-three-text resposive-size fw-medium">
            Somos una firma de consultoría especializada en políticas <br>
            públicas con amplia experiencia en México y América Latina.
          </p>
        </div>
      </div>
    </div>
  </section> -->

<div class="grid-home">
  <div class="uno">

      <h3 class="ps-lg-8 fw-medium text-color-letter-title s-two-text" style="
      border-bottom-width: 4px;
      border-bottom-style: solid;
      border-bottom-color: #F68E1D;
      width : 47%;">QUÉ HACEMOS</h3>
      <br>
    <p class="ps-lg-8 s-four-text text-color-letter-content fw-medium">
      Desde el año 2009, C230 Consultores ha ejecutado más de 200 proyectos de consultoría y de investigación para el sector público,
      organizaciones internacionales, organismos multilaterales y empresas privadas de Norte América, América Latina, Europa y Asia.
      <br><br>
      Nuestra especialidad es desarrollar herramientas y modelos de intervención que son rápidamente replicables a gran escala, mediante un
      enfoque de asistencia técnica. Para ello, desarrollamos diagnósticos colaborativos con nuestros clientes y financiadores; aprovechamos las
      lecciones derivadas de la experiencia nacional e internacional; definimos objetivos centrales; junto con las organizaciones que
      implementarán las soluciones, co-diseñamos procesos que permitan alcanzar los objetivos; probamos las herramientas diseñadas mediante
      pilotos iterativos aplicando principios de diseño ágil y, finalmente, preparamos los documentos normativos (como protocolos y
      procedimientos) que permiten su aplicación de manera homogénea.
    </p>
    <div class="ps-lg-8">
      <a class="btn btn-outline-white-fs-xl-0-n" href="{{ url('acerca')}}">Leer más <img src="img/Leer-mas.png" class="img-home-banner"> </a>
    </div>
    <br>

  </div>
  <div class="dos">
    <div class="grid-icon-tematics">
      <div class="initial-it">
        <h3 class="fw-semi-bold text-color-letter-orange s-three-text">Temáticas destacadas</h3>
      </div>
      <div class="uno-it">
        <img src="img/Iconos/uno.png" class="icono-home-size">
        <p class="s-five-text text-color-letter-icon fw-medium">Estado de <br>Derecho</p>
      </div>
      <div class="dos-it">
        <img src="img/Iconos/dos.png" class="icono-home-size">
        <p class="s-five-text text-color-letter-icon fw-medium">Salud y <br>bienestar</p>
      </div>
      <div class="tres-it">
        <img src="img/Iconos/tres.png" class="icono-home-size">
        <p class="s-five-text text-color-letter-icon fw-medium">Regulación,<br>competencia y <br>comercio</p>

      </div>
      <div class="cuatro-it">
        <img src="img/Iconos/cuatro.png" class="icono-home-size">
        <p class="s-five-text text-color-letter-icon fw-medium">Fortalecimiento <br>del sector público</p>

      </div>
      <div class="cinco-it">
        <img src="img/Iconos/cinco.png" class="icono-home-size">
        <p class="s-five-text text-color-letter-icon fw-medium">Trabajo y capital <br>humano</p>

      </div>
      <div class="seis-it">
        <img src="img/Iconos/seis.png" class="icono-home-size">
        <p class="s-five-text text-color-letter-icon fw-medium">Cambio climático, <br>medio ambiente y <br>sustentabilidad</p>

      </div>
      <div class="siete-it">
        <img src="img/Iconos/siete.png" class="icono-home-size">
        <p class="s-five-text text-color-letter-icon fw-medium">Desarrollo urbano <br>y vivienda</p>
      </div>
      <div class="ocho-it">
        <img src="img/Iconos/ocho.png" class="icono-home-size">
        <p class="s-five-text text-color-letter-icon fw-medium">Innovación, <br> ciencia y <br> tecnología</p>
      </div>
      <div class="nueve-it">
        <img src="img/Iconos/nueve.png" class="icono-home-size">
        <p class="s-five-text text-color-letter-icon fw-medium">Desarrollo social y <br>migración</p>
      </div>
    </div>
  </div>

  <div class="tres" style="background-image:url(img/team.png); background-repeat: round;"><h1>&nbsp;</h1></div>
  <div class="cuatro">
    <br>
    <button class="btn" style="
    border-bottom-width: 4px;
    border-bottom-style: solid;
    border-bottom-color: #F68E1D;
    ">
    <h3 class="fw-medium text-color-letter-title s-two-text">EQUIPO DIRECTIVO</h3>
    </button>
    <div class="ps-lg-4">
    <p class="text-color-letter-content fw-medium s-four-text">El liderazgo de C230 Consultores está integrado por un equipo multidisciplinario y diverso, con profunda experiencia en sector público y
      privado, y una sólida formación académica. Nuestro común denominador es el compromiso con el valor que generamos para nuestros
      clientes, y con el desarrollo profesional de todos los que formamos parte de esta firma.</p>
      <a class="btn btn-outline-white-fs-xl-0-n" href="{{ url('equipo')}}">Leer más <img src="img/Leer-mas.png" class="img-home-banner"> </a>
    </div>
  </div>
  <div class="cinco">
    <h3 class="ps-lg-8 fw-medium text-color-letter-title s-two-text" style="
    border-bottom-width: 4px;
    border-bottom-style: solid;
    border-bottom-color: #F68E1D;
    width : 35%;">PROYECTOS DESTACADOS</h3>
    <br>
    <div class="ps-lg-8" style="border: 1px solid blue;">

      <div class="cards-items" style="margin-right: 0px !important; padding-right: 0px !important;">

          <div class="card-project-do">
            <div class="card card-home">
              <div class="card-body">
                <!-- <div class="px-0"> -->
                  <img src="img/Proyectos-Proyecto2.png" class="icono-header-card">
                  <h3 class="text-color-letter-title mt-3 fw-medium s-three-text">Herramienta de Diagnóstico de las decisiones estratégicas del Ministerio Público</h3>
                  <p class="text-color-letter-content fw-semi-bold s-four-text">
                    La Herramienta tiene el objetivo de entender, a nivel regulatorio, institucional e individual, qué incentiva o desincentiva a los y las agentes del Ministerio Público en México a tomar ciertas decisiones estratégicas a largo del proceso penal. Desde 2019 y hasta el 2022, C230 Consultores aplica esta Herramienta en las fiscalías estatales de las entidades federativas mexicanas.
                  </p>
                <!-- </div> -->
              </div>
            </div>
          </div>

          <div class="card-project-do">
            <div class="card card-home">
              <div class="card-body">
                <!-- <div class="px-0"> -->
                  <img src="img/Proyectos-Proyecto1.png" class="icono-header-card">
                  <h3 class="text-color-letter-title mt-3 fw-medium s-three-text">Ciudades del Futuro </h3>
                  <p class="text-color-letter-content fw-semi-bold s-four-text">
                    Los productos principales del programa incluyen el desarrollo de tres estrategias de gobernanza de sistemas de transporte, así como el diseño e implementación de cinco proyectos piloto de movilidad incluyente.
                  </p>
                <!-- </div> -->
              </div>
            </div>
          </div>

          <div class="card-project-do">
            <div class="card card-home">
              <div class="card-body">
                <!-- <div class="px-0"> -->
                  <img src="img/Proyectos-proyecto3.png" class="icono-header-card">
                  <h3 class="text-color-letter-title mt-3 fw-medium s-three-text">Aprendizaje sobre financiamiento y acción climática</h3>
                  <p class="text-color-letter-content fw-semi-bold s-four-text">
                    C230 Consultores apoyó la implementación del laboratorio de aprendizaje sobre financiamiento y acción climática de los Climate Investment Funds,
                    el cual incluyó la facilitación de grupos de trabajo sobre métodos y métricas del cambio transformacional, energía limpia y transición energética, resiliencia y ecosistemas.
                    Esta estrategia es conocida como Transformational Change Learning Partnership.
                  </p>
                <!-- </div> -->
              </div>
            </div>
          </div>

          <div class="card-project-dt">
            <div class="card card-vacancies-empty-sb">
              <div class="card-body">
                <div class="px-2">
                  <h3 class="text-color-letter-orange fw-medium s-three-text">Conocer más proyectos</h3>
                  <a class="btn btn-outline-white-fs-xl-0-n " href="{{ url('proyectos')}}">Leer más <img src="img/Leer-mas.png" class="img-home-banner"> </a>
                </div>
              </div>
            </div>
          </div>

      </div>

    </div>
  </div>
  <div class="seis py-2">
    <h3 class="fw-normal text-color-letter-orange s-three-text">Vacantes</h3>
    <p class="text-color-letter-content fw-medium s-four-text">Estamos constantemente en búsqueda de talento.
      Si estas interesado en ingresar a C230 Consultores, revisa nuestras vacantes:</p>
      <a href="{{url('vacantes')}}" style="text-decoration : none;" class="btn btn-outline-white-fs-xl-0-n">Leer más <img src="img/Leer-mas.png" class="img-home-banner"> </a>
  </div>
</div>


  <section >
    <div class="container background-card">
      <div class="row">
        <h3 class="px-lg-5 pt-4 fw-medium text-color-letter-title s-two-text">Qué hacemos</h3>
      </div>
      <!--/.bg-holder-->

      <div class="row ">
        <div class="px-lg-5 col-md-12 text-lg-justify">
          <p class="s-four-text text-color-letter-content fw-medium">
            Desde el año 2009, C230 Consultores ha ejecutado más de 200 proyectos de consultoría y de investigación para el sector público,
            organizaciones internacionales, organismos multilaterales y empresas privadas de Norte América, América Latina, Europa y Asia.
            <br><br>
            Nuestra especialidad es desarrollar herramientas y modelos de intervención que son rápidamente replicables a gran escala, mediante un
            enfoque de asistencia técnica. Para ello, desarrollamos diagnósticos colaborativos con nuestros clientes y financiadores; aprovechamos las
            lecciones derivadas de la experiencia nacional e internacional; definimos objetivos centrales; junto con las organizaciones que
            implementarán las soluciones, co-diseñamos procesos que permitan alcanzar los objetivos; probamos las herramientas diseñadas mediante
            pilotos iterativos aplicando principios de diseño ágil y, finalmente, preparamos los documentos normativos (como protocolos y
            procedimientos) que permiten su aplicación de manera homogénea.
          </p>
          <a class="btn btn-outline-white-fs-xl-0-n" href="{{ url('acerca')}}">Leer más <img src="img/Leer-mas.png" class="img-home-banner"> </a>
        </div>

        <div class="px-lg-5 pt-3 col-md-12">
          <div class="row" style="
          border: 1px solid #e1e3e4;
          border-radius: 5px;
          background-color : #f6f6f6;">
          <div class="col-md-12 text-lg-center td-s">
            <h3 class="px-0 fw-semi-bold text-color-letter-orange s-three-text">Temáticas destacadas</h3>
          </div>
          <div class="col-md-12">
            <br>
          </div>

          <div class="col-md-12 align-i-one">
              <img src="img/Iconos/uno.png" class="icono-home-size pd-io-oe">

              <img src="img/Iconos/dos.png" class="icono-home-size pd-io-tw">

              <img src="img/Iconos/tres.png" class="icono-home-size pd-io-tw">

              <img src="img/Iconos/cuatro.png" class="icono-home-size pd-io-tw">

              <img src="img/Iconos/cinco.png" class="icono-home-size pd-io-tw">
          </div>
          <div class="col-md-12 align-i-one">
            <p class="s-five-text t-pbt text-color-letter-icon fw-medium pd-io-oe ">Estado de <br>Derecho</p>

            <p class="s-five-text t-pbt text-color-letter-icon fw-medium pd-io-tw">Salud y <br>bienestar</p>

            <p class="s-five-text t-pbt text-color-letter-icon fw-medium pd-io-fr">Regulación,<br>competencia y <br>comercio</p>

            <p class="s-five-text t-pbt text-color-letter-icon fw-medium pd-io-fv">Fortalecimiento <br>del sector público</p>

            <p class="s-five-text t-pbt text-color-letter-icon fw-medium pd-io-fv">Trabajo y capital <br>humano</p>
          </div>

          <!-- UNO -->

            <!-- fin uno -->
            <div class="col-md-12">
              <br>
            </div>

            <div class="col-md-12 align-i-one">
                <img src="img/Iconos/seis.png" class="icono-home-size pd-it-oe">

                <img src="img/Iconos/siete.png" class="icono-home-size pd-io-tw">

                <img src="img/Iconos/ocho.png" class="icono-home-size pd-io-tw">

                <img src="img/Iconos/nueve.png" class="icono-home-size pd-io-tw">

            </div>
            <div class="col-md-12 align-i-one">
              <p class="s-five-text t-pbt text-color-letter-icon fw-medium pd-io-sx">Cambio climático, <br>medio ambiente y <br>sustentabilidad</p>

              <p class="s-five-text t-pbt text-color-letter-icon fw-medium pd-io-fv">Desarrollo urbano <br>y vivienda</p>

              <p class="s-five-text t-pbt text-color-letter-icon fw-medium pd-io-fv">Innovación, <br> ciencia y <br> tecnología</p>

              <p class="s-five-text t-pbt text-color-letter-icon fw-medium pd-io-fr">Desarrollo social y <br>migración</p>

            </div>
            <!-- dos -->

            <div class="col-md-12">
              <br>
            </div>
          </div>
        </div>

      </div>

    </div>

  </section>

  <!-- ============================================-->
  <!-- <section> begin ============================-->
  <section style="padding-bottom : 1em;">
    <div class="container background-card">
      <div class="row">
        <h3 class="px-lg-5 pt-4 fw-medium text-color-letter-title s-two-text">Equipo directivo</h3>
      </div>
      <!-- <br> -->
      <!-- <div class="px-lg-5 col-md-12 text-lg-justify"> -->

      <div class="row">
        <div class="px-lg-5 col-md-12 text-lg-justify">
          <p class="text-color-letter-content fw-medium s-four-text">El liderazgo de C230 Consultores está integrado por un equipo multidisciplinario y diverso, con profunda experiencia en sector público y
            privado, y una sólida formación académica. Nuestro común denominador es el compromiso con el valor que generamos para nuestros
            clientes, y con el desarrollo profesional de todos los que formamos parte de esta firma.</p>
            <a class="btn btn-outline-white-fs-xl-0-n" href="{{ url('equipo')}}">Leer más <img src="img/Leer-mas.png" class="img-home-banner"> </a>
          </div>
        </div>
      </div>
    </section>
    <!-- ============================================-->
    <!-- <section> close ============================-->

  <!-- ============================================-->
  <!-- <section> begin ============================-->
  <section style="padding-top: 0; padding-bottom : 0;">
    <div class="container background-card">
      <div class="row">
        <h3 class="px-lg-5 pt-4 fw-medium text-color-letter-title s-two-text">Proyectos destacados</h3>
      </div>
      <br>

      <div class="px-lg-5 cards-items" style="margin-right: 0px !important; padding-right: 0px !important;">

          <div class="card-project-do">
            <div class="card card-home">
              <div class="card-body">
                <div class="px-0">
                  <img src="img/Proyectos-Proyecto2.png" class="icono-header-card">
                  <h3 class="text-color-letter-title mt-3 fw-medium s-three-text">Herramienta de Diagnóstico de las decisiones estratégicas del Ministerio Público</h3>
                  <p class="text-color-letter-content fw-semi-bold s-four-text">
                    La Herramienta tiene el objetivo de entender, a nivel regulatorio, institucional e individual, qué incentiva o desincentiva a los y las agentes del Ministerio Público en México a tomar ciertas decisiones estratégicas a largo del proceso penal. Desde 2019 y hasta el 2022, C230 Consultores aplica esta Herramienta en las fiscalías estatales de las entidades federativas mexicanas.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="card-project-do">
            <div class="card card-home">
              <div class="card-body">
                <div class="px-0">
                  <img src="img/Proyectos-Proyecto1.png" class="icono-header-card">
                  <h3 class="text-color-letter-title mt-3 fw-medium s-three-text">Ciudades del Futuro </h3>
                  <p class="text-color-letter-content fw-semi-bold s-four-text">
                    Los productos principales del programa incluyen el desarrollo de tres estrategias de gobernanza de sistemas de transporte, así como el diseño e implementación de cinco proyectos piloto de movilidad incluyente.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="card-project-do">
            <div class="card card-home">
              <div class="card-body">
                <div class="px-0">
                  <img src="img/Proyectos-proyecto3.png" class="icono-header-card">
                  <h3 class="text-color-letter-title mt-3 fw-medium s-three-text">Aprendizaje sobre financiamiento y acción climática</h3>
                  <p class="text-color-letter-content fw-semi-bold s-four-text">
                    C230 Consultores apoyó la implementación del laboratorio de aprendizaje sobre financiamiento y acción climática de los Climate Investment Funds,
                    el cual incluyó la facilitación de grupos de trabajo sobre métodos y métricas del cambio transformacional, energía limpia y transición energética, resiliencia y ecosistemas.
                    Esta estrategia es conocida como Transformational Change Learning Partnership.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="card-project-dt">
            <div class="card card-vacancies-empty-sb">
              <div class="card-body">
                <div class="px-2">
                  <h3 class="text-color-letter-orange fw-medium s-three-text">Conocer más proyectos</h3>
                  <a class="btn btn-outline-white-fs-xl-0-n " href="{{ url('proyectos')}}">Leer más <img src="img/Leer-mas.png" class="img-home-banner"> </a>
                </div>
              </div>
            </div>
          </div>

      </div>
    </div>
    </div>
  </section>
  <!-- ============================================-->
  <!-- <section> close ============================-->


    <br>

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section style="padding-top : 0;">
      <div class="container">

        <div class="row">

          <div class="col-md-12 mb-3" >
            <div class="card card-invisible ps-xxl-1 pp-lf">
              <div class="card-body">
                <div class="border-bm card-invisible text-lg-center">
                  <h3 class="fw-normal text-color-letter-orange s-three-text">Vacantes</h3>
                  <p class="text-color-letter-content fw-medium s-four-text">Estamos constantemente en búsqueda de talento.
                    Si estas interesado en ingresar a C230 Consultores, revisa nuestras vacantes:</p>
                    <a href="{{url('vacantes')}}" style="text-decoration : none;" class="btn btn-outline-white-fs-xl-0-n">Leer más <img src="img/Leer-mas.png" class="img-home-banner"> </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-5 mb-3 ">
              <div class="card card-invisible">
                <div class="card-body ">
                  <div class="px-0 border-bm card-invisible">
                    <h3 class="px-0 fw-normal text-color-letter-orange s-three-text">Contacto</h3>
                    <p class="text-color-letter-content fw-medium s-four-text">Queremos conocerte. Con gusto resolveremos tus dudas. <br>
                    </p>
                    <div class="row px-0">
                      <div class="col-md-6">
                        <label class="fw-semi-bold text-color-letter-title s-four-text"><img class="icono-header-list" src="img/Contactanos-Mail.png">&nbsp;&nbsp;info@c-230.com</label>
                        <label class="fw-semi-bold text-color-letter-title s-four-text"><img class="icono-header-list" src="img/Contactanos-Telefono.png">&nbsp;&nbsp;&nbsp;+52 (55) 5208 1403</label>
                      </div>
                      <div class="col-md-6">
                        <label class="">
                            <a class="fw-semi-bold text-color-letter-title s-four-text" style="text-decoration : none;" target="_blank" href="https://www.linkedin.com/company/c230-consultores">
                                <img class="icono-header-list" src="../img/Header-Linkedin.png">&nbsp;&nbsp;LinkedIn&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </a>
                          </label>
                        <label class="">
                          <a class="fw-semi-bold text-color-letter-title s-four-text" style="text-decoration : none;" target="_blank" href="https://twitter.com/C230Consultores">
                          <img class="icono-header-list" src="../img/Header-Twitter.png">&nbsp;Twitter
                          </a>
                        </label>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div> -->

          </div>
        </div>
      </section>
      <!-- ============================================-->
      <!-- <section> close ============================-->
      <br>
      @endsection
