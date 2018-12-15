<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ MetaTag::get('description') }}">
        <title>{{ MetaTag::get('title') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
  <!-- Bootstrap core CSS -->
  <link href="mdb/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="mdb/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="mdb/css/style.css" rel="stylesheet">
  <link href="mdb/css/style.min.css" rel="stylesheet">
  <link rel="stylesheet" href="mdb/css/ownstyle.css">

        <script type="text/javascript" src="mdb/js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="mdb/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="mdb/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="mdb/js/mdb.min.js"></script>
  <!--Main Navigation-->
<!-- Main navigation -->
<header>
  <style>
  .navbar .nav-flex-icons {
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    margin-top: 20px;
}


  </style>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar z-depth-5">
    <div class="container">
      <a class="navbar-brand " href="#">
        <img src="mdb/img/mainlogo.png" alt="" srcset="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
        aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Главная
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="#">Наши клиенты</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{url('/offer')}}">Услуги</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Контакты</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{url('/blog')}}">Блог</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Рекомендации</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">О нас</a>
              </li>
        </ul>
        
        <form class="form-inline">
          <div class="md-form mt-0">
            <ul class="navbar-nav nav-flex-icons">
                <div class="btn-group">
                    <button class="btn btn-danger btn-sm  dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false">
                     Выберите город
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">г.Киев</a>
                      <a class="dropdown-item" href="{{url('/bahmut')}}">г.Бахмут Донецкая область</a>
                      
                  </div>
                  <ul class="navbar-nav flex-row">
                      <li class="nav-item"><a class="nav-link px-2" href="#"><span class="fa fa-facebook"></span></a></li>
                      <li class="nav-item"><a class="nav-link px-2" href="#"><span class="fa fa-twitter"></span></a></li>
                      <li class="nav-item"><a class="nav-link px-2" href="#"><span class="fa fa-instagram"></span></a></li>
                    
                  </ul>
            </ul>
          </div>
        </form>
      </div>
    </div>
  </nav>
  <!-- Navbar -->
  <!-- Full Page Intro -->
  <div class="view" style="background-image: url('mdb/img/slider1.png'); background-repeat: no-repeat; background-size: cover; background-position: center center; ">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-indigo-strong d-flex justify-content-center align-items-center ">
      <!-- Content -->
      <div class="container ">
        <!--Grid row-->
        <div class="row pt-lg-5 mt-lg-5">
          <!--Grid column-->
          <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left slideOutUp"
            data-wow-delay="0.3s">
            <h1 class="display-4 font-weight-bold ">Порашковая покраска г.Киев</h1>
            <hr class="hr-light ">
            <h6 class="mb-3">Наша компания предлагает услуги по порошковой покраске металла и металлоконструкций в Киеве. RAL (около 250).</h6>
        <a href="{{url('/offer')}}" class="btn btn-outline-white">Мы предлагаем</a>
            <button type="button" class="btn btn-outline-white" data-toggle="modal" data-target="#modalCookie1">График работ</button>
           
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4 ">
            <!--Form-->
            <div class="card wow zoomIn " data-wow-delay="0.3s">
              <div class="card-body z-depth-2 ">
                <!--Header-->
                <div class="text-center">
                  <h3 class="dark-grey-text">
                    <strong>Свяжитесь с нами:</strong>
                    @if(Session::has('success'))
                      <div class="alert alert-success ">
                       {{ Session::get('success') }}
                      </div>
                    @endif
                  </h3>
                  <hr>
                </div>
                {!! Form::open(['route'=>'contactus.store']) !!}
                <div class="md-form">
                  <i class="fa fa-user prefix grey-text"></i>
                  <input type="text" name="name" id="form3" class="form-control" placeholder="Ваше имя">
                  
                </div>
                <div class="md-form ">
                  <i class="fa fa-envelope prefix grey-text"></i>
                  <input type="text" name = "email"id="form2" class="form-control" placeholder="Ваш email">
                  
                </div>
                <!--Textarea with icon prefix-->
                <div class="md-form">
                  <i class="fa fa-pencil prefix grey-text"></i>
                  <textarea type="text" name="message" id="form8" class="md-textarea form-control" rows="3" placeholder="Ваше сообщение"></textarea>
                  
                </div>
                <div class="text-center mt-3 ">
                  <button class="btn btn-indigo ">Send</button>
                  <hr>
                 
                </div>
                {!! Form::close() !!}
              </div>
            </div>
            <!--/.Form-->
            
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->
</header>
<!-- Main navigation -->
  <!--Main Navigation-->
    </head>
    <body>
        {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif --}}
<!--Carousel Wrapper-->
<!--Carousel Wrapper-->

  <!--/.Carousel Wrapper-->
  <!--/.Carousel Wrapper-->
            <script>new WOW().init();</script>
            <div class="modal fade top" id="modalCookie1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Body-->
      <div class="modal-body">
        <div class="row d-flex justify-content-center align-items-center">

          <p class="pt-3 pr-2">ПН-ПТ: 8:00 - 18:00 СБ-ВС: Выходной</p>

          
          <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Понял</a>
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Section: Features v.4-->
<div class="container">

  

<section>

    <!--Section heading-->
    <h1 class="py-5 font-weight-bold text-center">Почему мы лучшие на рынке?</h1>
    <!--Section description-->
    <p class="px-5 mb-5 pb-3 lead grey-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna
      aliqua. Ut enim ad minim veniam.</p>
  
    <!--Grid row-->
    <div class="row">
  
      <!--Grid column-->
      <div class="col-md-4">
  
        <!--Grid row-->
        <div class="row mb-2">
          <div class="col-2">
            <i class="fa fa-2x fa-flag-checkered deep-purple-text"></i>
          </div>
          <div class="col-10 text-left">
            <h5 class="font-weight-bold">International</h5>
            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
              nam, aperiam minima assumenda
              deleniti hic.</p>
          </div>
        </div>
        <!--Grid row-->
  
        <!--Grid row-->
        <div class="row mb-2">
          <div class="col-2">
            <i class="fa fa-2x fa-flask deep-purple-text"></i>
          </div>
          <div class="col-10 text-left">
            <h5 class="font-weight-bold">Experimental</h5>
            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
              nam, aperiam minima assumenda
              deleniti hic.</p>
          </div>
        </div>
        <!--Grid row-->
  
        <!--Grid row-->
        <div class="row mb-2">
          <div class="col-2">
            <i class="fa fa-2x fa-glass deep-purple-text"></i>
          </div>
          <div class="col-10 text-left">
            <h5 class="font-weight-bold">Relaxing</h5>
            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
              nam, aperiam minima assumenda
              deleniti hic.</p>
          </div>
        </div>
        <!--Grid row-->
  
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class="col-md-4 mb-2 center-on-small-only flex-center ">
        <img src="/mdb/img/mainpage.png" alt="" class="z-depth-0 ">
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class="col-md-4">
  
        <!--Grid row-->
        <div class="row mb-2">
          <div class="col-2">
            <i class="fa fa-2x fa-heart deep-purple-text"></i>
          </div>
          <div class="col-10 text-left">
            <h5 class="font-weight-bold">Beloved</h5>
            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
              nam, aperiam minima assumenda
              deleniti hic.</p>
          </div>
        </div>
        <!--Grid row-->
  
        <!--Grid row-->
        <div class="row mb-2">
          <div class="col-2">
            <i class="fa fa-2x fa-flash deep-purple-text"></i>
          </div>
          <div class="col-10 text-left">
            <h5 class="font-weight-bold">Rapid</h5>
            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
              nam, aperiam minima assumenda
              deleniti hic.</p>
          </div>
        </div>
        <!--Grid row-->
  
        <!--Grid row-->
        <div class="row mb-2">
          <div class="col-2">
            <i class="fa fa-2x fa-magic deep-purple-text"></i>
          </div>
          <div class="col-10 text-left">
            <h5 class="font-weight-bold">Magical</h5>
            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
              nam, aperiam minima assumenda
              deleniti hic.</p>
          </div>
        </div>
        <!--Grid row-->
  
      </div>
      <!--Grid column-->
  
    </div>
    <!--Grid row-->
  
  </section>
</div>

<script>
new WOW().init();
</script>
  <!--/Section: Features v.4-->
    </body>
</html>
