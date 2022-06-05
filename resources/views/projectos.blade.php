@extends('layouts.site')

@section('content')

<section class="py-5-home">
  <div class="grid-banner-home">
    <div class="pd-text-b">
      <h1 class="text-white font-face-dpbl s-one-ban-text position-text cxy-title">Proyectos destacados</h1>
      <p class="text-white s-three-ban-text font-face-dpm position-text cxy-sub-va">
        C230 Consultores asiste a organizaciones con el desarrollo
        soluciones de política pública basadas en análisis riguroso de
        evidencia, factibles de implementar y escalar. Nuestra firma ha
        llevado a cabo más de 200 proyectos en temas de estado de
        derecho, desarrollo económico, desarrollo urbano, política de
        vivienda, cambio climático, educación y salud pública, entre
        otros.
        </p>
      </div>
    <img class="size-home-banner" src="img/C230-p.png"/>
  </div>
</section>



<section>
  <div class="container background-card">

    <div class="grid-project-list">
      @foreach ($data as $key => $value)
      <!-- {{$v = json_decode($value['data_web'])->files }} -->

      <div class="card b-card-orange card-project-sa">
        <div class="card-body box" style="padding:0px; overflow: hidden;">
          <div class="grid-content-project-list">
            <div class="uno-gcpl" style="background-image:url(
              ' {{ asset( json_decode($value['file_web_single'])->path ) }} '
              );
              ">
              <h1>&nbsp;</h1>
              <!-- <img src="img/teamBN.jpg" class="igcpl"> -->
            </div>
            <div class="dos-gcpl">
              <div class="d-gcpl-uno">
                @foreach ($value['tematics_web'] as $key_w => $value_w)
                <span class="badge badge-info" style="background:#508bb1;">{{$value_w['name']}}</span>
                @endforeach
              </div>
              <div class="d-gcpl-dos">
                <h3 class="text-color-letter-title mt-3 font-face-dpm s-four-text">
                  {!! json_decode($value['project_title'])->title_es !!}
                </h3>
                <div class="text-color-letter-content font-face-dp s-four-text sc-desc">
                  {!! json_decode($value['data_web'])->description_es !!}
                </div>
              </div>
              <div class="d-gcpl-tres">
                <a class="btn btn-outline-white-fs-xl-0-n"
                href="{{ action('ProjectController@getProject', ['id' => $value['id']]) }}"
                >Leer más <img src="img/Leer-mas.png" class="img-home-banner"> </a>
              </div>


            </div>
          </div>
        </div>
      </div>

      @endforeach


    </div>


    </div>
  </section>

  @endsection
