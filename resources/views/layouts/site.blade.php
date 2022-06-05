<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">



  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>C-230</title>


  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="../img/Header-Logo.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../img/Header-Logo.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../img/Header-Logo.png">
  <link rel="shortcut icon" type="image/x-icon" href="../img/Header-Logo.png">
  <meta name="msapplication-TileImage" content="../img/Header-Logo.png">
  <meta name="theme-color" content="#ffffff">


  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <!-- <link href="../assets/css/theme.css" rel="stylesheet" /> -->
  <link href="../assets/css/theme.css" rel="stylesheet" />




</head>


<body>

  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">

    <nav class="navbar navbar-light fixed-top py-4-navbar d-block navbar-space" data-navbar-on-scroll="data-navbar-on-scroll">
      <div class="grid-nav">

        <div class="uno-gn pd-text-nav">

          <input type="checkbox" id="click">
          <label class="menu-btn" for="click">

            @if (Str::substr(Request::path(), 0, 9) === 'vacantes/' || Request::path() === 'avisoprivacidad' || Request::path() === 'working' || Str::substr(Request::path(), 0, 10) === 'proyectos/' || Request::path() === 'avisoprivacidadgral')
            <div class="line-w"></div>
            <div class="line-w"></div>
            <div class="line-w"></div>
            @else
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            @endif

          </label>
          <!-- <label type="button" name="button" for="click" class="menu-btn">hola</label> -->

          <div class="lisf">
            <a class="nav-style-res text-color-letter-title s-two-text font-face-dp"  href="{{ url('working')}}">Qué hacemos </a>
            <a class="nav-style-res text-color-letter-title s-two-text font-face-dp"  href="{{ url('equipo')}}">Equipo directivo</a>
            <a class="nav-style-res text-color-letter-title s-two-text font-face-dp"  href="{{ url('working')}}">Proyectos destacados</a>
            <a class="nav-style-res text-color-letter-title s-two-text font-face-dp"  href="{{ url('vacantes')}}">Vacantes</a>
          </div>

          @if (Str::substr(Request::path(), 0, 9) === 'vacantes/' || Request::path() === 'avisoprivacidad' || Request::path() === 'working' || Str::substr(Request::path(), 0, 10) === 'proyectos/' || Request::path() === 'avisoprivacidadgral')
          <a href="{{ url('/')}}">
            <img src="../img/C230_Logo_SinFondo.png" class="icono-header-dos"/>
          </a>
          @else
          <a href="{{ url('/')}}">
            <img src="../img/Footer-Logo-C230.png"  class="icono-header"/>
          </a>
          @endif
        </div>
        <div class="dos-gn nav-responsive">
          @if (Str::substr(Request::path(), 0, 9) === 'vacantes/' || Request::path() === 'avisoprivacidad' || Request::path() === 'working' || Str::substr(Request::path(), 0, 10) === 'proyectos/' || Request::path() === 'avisoprivacidadgral')
          <a class="s-six-text nav-style-nw pd-nav-lr"  href="{{ url('working')}}">Qué hacemos </a>
          <a class="s-six-text nav-style-nw pd-nav-lr"  href="{{ url('equipo')}}">Equipo directivo</a>
          <a class="s-six-text nav-style-nw pd-nav-lr"  href="{{ url('working')}}">Proyectos destacados</a>
          <a class="s-six-text nav-style-nw pd-nav-lr"  href="{{ url('vacantes')}}">Vacantes</a>
          @else
          <a class="s-six-text nav-style pd-nav-lr"  href="{{ url('working')}}">Qué hacemos </a>
          <a class="s-six-text nav-style pd-nav-lr"  href="{{ url('equipo')}}">Equipo directivo</a>
          <a class="s-six-text nav-style pd-nav-lr"  href="{{ url('working')}}">Proyectos destacados</a>
          <a class="s-six-text nav-style pd-nav-lr"  href="{{ url('vacantes')}}">Vacantes</a>
          @endif
        </div>
        <div class="tres-gn">

          @if (Str::substr(Request::path(), 0, 9) === 'vacantes/' || Request::path() === 'avisoprivacidad' || Request::path() === 'working' || Str::substr(Request::path(), 0, 10) === 'proyectos/' || Request::path() === 'avisoprivacidadgral')
          <a href="https://twitter.com/C230Consultores" target="_blank"><img src="../img/Header-Twitter_1.png" class="icono-header-nav-orange"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="https://www.linkedin.com/company/c230-consultores" target="_blank"><img src="../img/Header-Linkedin_1.png" class="icono-header-nav-orange"></a>
          <div class="o-switch btn-group" style="margin-top : 10px;">
            <div class="form-switch fs-hb" style="
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            ">
            <p class="fs-hb-t s-six-text" id="uno-c" style="font-weight:bold;" >
              ESP&nbsp;
            </p>
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onchange="cambioIdioma()">
            <p class="fs-hb-t s-six-text" id="dos-c" style="font-weight:lighter;">
              &nbsp;ENG
            </p>
          </div>
        </div>

        @elseif(Request::path() === 'vacantes')
        <a href="https://twitter.com/C230Consultores" target="_blank"><img src="../img/Header-Twitter_1.png" class="icono-header-nav"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="https://www.linkedin.com/company/c230-consultores" target="_blank"><img src="../img/Header-Linkedin_1.png" class="icono-header-nav"></a>
        <div class="o-switch btn-group re" style="margin-top : 10px;">
          <div class="form-switch fs-hb" style="
          display: grid;
          grid-template-columns: 1fr 1fr 1fr;
          ">
          <p class="fs-hb-t s-six-text" id="uno-c" style="font-weight:bold;" >
            ESP&nbsp;
          </p>
          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onchange="cambioIdioma()">
          <p class="fs-hb-t s-six-text" id="dos-c" style="font-weight:lighter;">
            &nbsp;ENG
          </p>
        </div>
      </div>
      @else
      <a href="https://twitter.com/C230Consultores" target="_blank"><img src="../img/Footer-Twitter.png" class="icono-header-nav"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="https://www.linkedin.com/company/c230-consultores" target="_blank"><img src="../img/Footer-Linkedin.png" class="icono-header-nav"></a>
      <div class="o-switch btn-group text-white" style="margin-top : 10px;">
        <div class="form-switch fs-hb" style="
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        ">
        <p class="fs-hb-t s-six-text" id="uno-c" style="font-weight:bold;" >
          ESP&nbsp;
        </p>
        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onchange="cambioIdioma()">
        <p class="fs-hb-t s-six-text" id="dos-c" style="font-weight:lighter;">
          &nbsp;ENG
        </p>
      </div>
    </div>
    @endif
  </div>
</div>
</div>
</nav>

@yield('content')




<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="py-0 pt-4 bg-6f" >

  <!-- The Modal -->


  <div class="grid-footer">
    <div class="uno-footer">
      <img src="../img/Footer-Logo-C230.png" class="icono-header-footer" alt="..." />

    </div>
    <div class="dos-footer">
      <ul class="list-unstyled mb-md-1 mb-lg-0">
        <li class="lh-1">
          <img class="img-home-address" src="../img/Footer-Domicilio.png">
          <a class="text-200 text-decoration-none s-five-text font-face-dpm" href="#!">
            &nbsp;
            Calle Tabasco No. 77, Colonia Roma Norte,
            Alc. Cuauhtémoc, 06700 CDMX, México</a></li>
            <li class="lh-1">&nbsp;</li>
            <li class="lh-1"><a class="text-200 text-decoration-none s-five-text font-face-dpm">CONTACTO</a></li>
            <li class="lh-1"><a class="text-200 text-decoration-none s-five-text font-face-dpm" href="#!"> <img class="img-home-banner" src="../img/Footer-Mail.png">&nbsp;info@c-230.com</a></li>
            <li class="lh-1"><a class="text-200 text-decoration-none s-five-text font-face-dpm" href="#!"><img class="img-home-banner" src="../img/Footer-Telefono.png">&nbsp;&nbsp;&nbsp;+52 (55) 5208 1403</a></li>
            <li class="lh-1">&nbsp;</li>
            <li class="lh-1"><a class="text-200 text-decoration-none s-five-text font-face-dpm">MEDIOS</a></li>
            <li class="lh-1">
              <a class="text-200 text-decoration-none s-five-text font-face-dpm" target="_blank" href="https://www.linkedin.com/company/c230-consultores"><img class="img-home-banner" src="../img/Footer-Linkedin.png">&nbsp;LinkedIn</a>
              <a class="text-200 text-decoration-none s-five-text font-face-dpm" target="_blank" href="https://twitter.com/C230Consultores">&nbsp;&nbsp;
                <img class="img-home-banner" src="../img/Footer-Twitter.png">&nbsp;Twitter</a>
              </li>
            </ul>
          </div>
          <div class="tres-footer">
            <ul class="list-unstyled mb-md-4 mb-lg-0 ">
              <li class="lh-1">
                <a class="text-200 text-decoration-none s-five-text font-face-dpm" href="#!"> <b>C230 Consultores</b> no cobra ninguna cuota durante los procesos de
                  reclutamiento, selección y contratación a los aspirantes.</a></li>
                  <li class="lh-1">&nbsp;</li>
                  <li class="lh-1"><a class="text-200 text-decoration-none s-five-text font-face-dpm" href="#!"> <b>C230 Consultores</b> no realiza ningún cobro durante sus procesos de
                    adquisiciones a sus proveedores. </a></li>
                    <li class="lh-1">&nbsp;</li>
                    <li class="lh-1">
                      <p class="text-200 text-decoration-none s-five-text font-face-dpm"> <b>C230 Consultores</b> mantiene una política de cero tolerancia con respecto
                        a la trata de personas.<a class="text-color-letter-orange" style="cursor:pointer;"
                        id="myBtn"> Solicita aquí nuestra política</a></p></li>
                        <li class="lh-1">
                          <p class="text-200 text-decoration-none s-five-text font-face-dpm"> <a href="{{ url('avisoprivacidadgral')}}" class="text-color-letter-orange" style="cursor:pointer;"
                          >Consulta aquí nuestro Aviso de privacidad</a></p></li>
                          <li class="lh-1">
                            <p class="text-200 text-decoration-none s-five-text font-face-dpm">
                              <b>C230 Consultores</b> mantiene una política de cero tolerancia con respecto al Fraude y el Soborno.
                              <a target="_blank" href="https://c-230.com/img/Pol%C3%ADtica%20Anti-Fraud%20&%20Bribery%20-%20Espa%C3%B1ol%20-C-230.pdf" class="text-color-letter-orange" style="cursor:pointer;">
                              Consulte aquí la parte 1 de nuestra politica
                              </a></p></li>

                      </ul>
                    </div>
                  </div>
                  <br>


                </section>
                <!-- <section> close ============================-->
                <!-- ============================================-->
                <!-- The Modal -->
                <div id="myModal" class="modal">

                  <!-- Modal content -->
                  <div class="modal-content">
                    <div class="modal-header">
                      <h2 class="text-color-letter-title s-two-text font-face-dpbl">Solicitud de Política contra la trata de personas</h2>
                      <a><span class="close">&times;</span></a>

                    </div>
                    <!-- <form method="post" action="/send-email" enctype="multipart/form-data" id="register-form"> -->
                      <form method="post" action="/send-email" id="register-form" enctype="multipart/form-data">

                      {{ csrf_field() }}
                      <div class="modal-body">

                        <div class="row">
                          <div class="col-md-12">
                            <label class="text-color-letter-title s-four-text font-face-dp">Correo</label>
                            <input type="email" id="correo" name="correo" required="true" pattern="^[_a-zA-Z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$" class="form-control">
                          </div>
                          <div class="col-md-12">
                            <label class="text-color-letter-title s-four-text font-face-dp">Nombre</label>
                            <input type="text" id="nombre" name="nombre" required="true" class="form-control">
                          </div>
                          <div class="col-md-12">
                            <label class="text-color-letter-title s-four-text font-face-dp">Motivo de la solicitud</label>
                            <textarea name="motivo" id="motivo" class="form-control" required="true" rows="3" cols="20"></textarea>
                          </div>
                        </div>


                      </div>
                      <div class="modal-footer">

                        <button type="button" id="footerbtn" class="btn btn-b-s btn-outline-secondary font-face-dp">Cancelar</button>
                        <button type="submit" class="btn btn-b-p btn-outline-primary font-face-dp">Enviar</button>
                      </div>
                    </div>
                  </form>

                </div>

              </main>

              <!-- ===============================================-->
              <!--    End of Main Content-->
              <!-- ===============================================-->




              <!-- ===============================================-->
              <!--    JavaScripts-->
              <!-- ===============================================-->
              <!-- <script src="../vendors/@popperjs/popper.min.js"></script> -->
              <!-- <script src="../vendors/bootstrap/bootstrap.min.js"></script> -->
              <!-- <script src="../vendors/is/is.min.js"></script> -->
              <!-- <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script> -->
              <!-- <script src="../vendors/fontawesome/all.min.js"></script> -->
              <script type="text/javascript">

              function cambioIdioma() {
                if (event.target.checked == true) {
                  var uno = document.getElementById('uno-c');
                  uno.style.fontWeight = 'lighter';
                  var dos = document.getElementById('dos-c');
                  dos.style.fontWeight = 'Bold';
                }else if (event.target.checked == false) {
                  var uno = document.getElementById('uno-c');
                  uno.style.fontWeight = 'Bold';
                  var dos = document.getElementById('dos-c');
                  dos.style.fontWeight = 'lighter';
                }
              }

              </script>
              <script>
              // Get the modal
              var modal = document.getElementById("myModal");

              // Get the button that opens the modal
              var btn = document.getElementById("myBtn");

              // Get the <span> element that closes the modal
              var span = document.getElementsByClassName("close")[0];

              var btn_footer = document.getElementById("footerbtn");

              // When the user clicks the button, open the modal
              btn.onclick = function() {
                modal.style.display = "block";
              }

              // When the user clicks the button, open the modal
              btn_footer.onclick = function() {
                modal.style.display = "none";
              }

              // When the user clicks on <span> (x), close the modal
              span.onclick = function() {
                modal.style.display = "none";
              }

              // When the user clicks anywhere outside of the modal, close it
              window.onclick = function(event) {
                if (event.target == modal) {
                  modal.style.display = "none";
                }
              }
            </script>

            <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
            <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
            <!-- <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> -->
            <!-- <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet"> -->

            <!--
            * C-230 (https://c-230.com/)
            * Copyright 2021- C-230 Consultores
            * -->
          </body>

          </html>
