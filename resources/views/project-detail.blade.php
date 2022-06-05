@extends('layouts.site')

@section('content')


<section class="py-5-vacancies-details">
  <div class="grid-banner-home">
    <div class="pd-text-b">
      @foreach ($data[0]['tematics_web'] as $key_w => $value_w)
      <span class="badge badge-info" style="background:#508bb1;">{{$value_w['name']}}</span>
      @endforeach
      <br>
      <p class="font-face-dpbl text-color-letter-content s-four-text" style="padding-top : 12px">Proyecto:</p>
      <h1 class="font-face-dp text-color-letter-title s-two-text" style="margin-top : -12px">
        {!! json_decode($data[0]['project_title'])->title_es !!}
      </h1>
      <p class="font-face-dpbl text-color-letter-content s-four-text" style="padding-top: 12px;">Cliente:</p>
      <div style="margin-top : -12px;">
      @foreach ($data[0]['clients'] as $key_c => $value_c)
        <h1 class="font-face-dp text-color-letter-title s-four-text" >
          {{$value_c['name']}}
        </h1>
      @endforeach
    </div>


    </div>
    <img class="size-home-banner-dos" src="{{json_decode($data[0]['file_web_single'])->path}}"/>
  </div>
</section>

<section>
  <div class="container background-card margin-pds">
    <br>

    <div class="grid-pds">

      <div class="uno-gpds">
        <div class="text-color-letter-content s-four-text font-face-dp text-lg-justify" >
            {!! json_decode($data[0]['data_web'])->description_es !!}
        </div>
        <br>

        @foreach (json_decode($data[0]['data_web'])->subtitles as $key_s => $value_s)

        <h3 class="text-color-letter-orange s-four-text font-face-dp">{{$value_s->name_seccion_es}}</h3>
        <div class="text-color-letter-content s-four-text font-face-dp text-lg-justify">
          {!! $value_s->subtitle_es !!}
        </div>
        <br>
        @endforeach

      </div>

      <div class="dos-gpds">
        <div class="row">
          @if( (json_decode($data[0]['data_web'])->files) == true)
          <div class="col-md-12" style="
          border-left: 1px solid #000000;
          border-bottom: 1px solid #000000;
          ">
          <p class="text-color-letter-title font-face-dpbl s-four-text">Recursos descargables</p>
          <br>
          @foreach (json_decode($data[0]['data_web'])->files_n as $key_f => $value_f)
          <p class="font-face-dp"  style="overflow: hidden;text-overflow: ellipsis;white-space: initial;">
            <a href="{{$value_f->path}}" target="_blank"><i class="fas fa-download"></i>&nbsp;{{$value_f->name}}</a>
           </p>
          @endforeach
          </div>

          @endif
          <div class="col-md-12" style="
          border-left: 1px solid #000000;
          ">
          <p class="text-color-letter-title font-face-dpbl s-four-text">Otros proyectos</p>
          @foreach($data_p as $key_p => $value_p)
          <br>
          <div class="card b-card-orange">
            <div class="card-body">
              @foreach ($value_p['tematics_web'] as $key_w => $value_w)
              <span class="badge badge-info" style="background:#508bb1;">{{$value_w['name']}}</span>
              @endforeach
              <h3 class="text-color-letter-title mt-3 font-face-dp s-four-text">
                {!! json_decode($value_p['project_title'])->title_es !!}
              </h3>
                <br>
                <div class="text-color-letter-content font-face-dp s-four-text sc-desc">
                  {!! json_decode($value_p['data_web'])->description_es !!}
                </div>
                <a class="btn btn-outline-white-fs-xl-0-n"
                  href="{{ action('ProjectController@getProject', ['id' => $value_p['id']]) }}"
                >Leer más <img src="../img/Leer-mas.png" class="img-home-banner"> </a>
            </div>
          </div>
          @endforeach


          </div>
        </div>
      </div>

    </div>
  </div>
</section>






@endsection
