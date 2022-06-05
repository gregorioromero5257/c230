<nav class="navbar navbar-light fixed-top py-4-navbar d-block navbar-space" data-navbar-on-scroll="data-navbar-on-scroll">
  <div class="container">


    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
    aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i> </button>

    <div class="collapse navbar-collapse border-top border-lg-0" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto font-base">
        <li class="nav-item px-1" data-anchor="data-anchor"><a class="nav-link" aria-current="page" href="{{ url('/')}}">INICIO</a></li>
        <li class="nav-item px-1" data-anchor="data-anchor"><a class="nav-link" href="#">QUIÉNES SOMOS</a></li>
        <li class="nav-item px-1" data-anchor="data-anchor"><a class="nav-link" href="#">QUÉ HACEMOS</a></li>
        <li class="nav-item px-1" data-anchor="data-anchor"><a class="nav-link" href="{{ url('vacantes')}}">VACANTES</a></li>
      </ul>
    </div>

    <div class="align-middle">
      <a href="{{ url('/') }}"><img src="img/Header-Logo.png" class="icono-header"/></a>
    </div>

      <div class="o-switch btn-group no-outline" data-toggle="buttons" role="group">
        <label class="fw-bold fsw-0">
          ESP&nbsp;
        </label>
        <label>
          <div class="form-switch fsw-0">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
          </div>
        </label>
        <label class="fw-lighter fsw-0">
          ENG
       </label>
       &nbsp;&nbsp;&nbsp;&nbsp;
       <a href="#" class="icono-header-media"><img src="img/Header-Twitter.png"></a>
       &nbsp;&nbsp;
       <a href="#" class="icono-header-media"><img src="img/Header-Linkedin.png"></a>
      </div>

      <!-- class="icono-header-media" -->
    <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/gallery/logo.png" height="24" alt="..." /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
    <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
    <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link fw-medium active" aria-current="page" href="#home">Home</a></li>
    <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="#team">Team</a></li>
    <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="#designIdeas">Design Ideas</a></li>
    <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="#help">Help</a></li>
  </ul>
  <form class="ps-lg-5"><a class="btn btn-outline-warning text-primary order-1 order-lg-0" href="#!">Get In Touch</a></form>
</div> -->
</div>
</nav>


@yield('content')
