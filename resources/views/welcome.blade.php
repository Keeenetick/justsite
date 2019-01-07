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
  <link rel="stylesheet" href="mdb/css/nav.css">
  <script type="text/javascript" src="mdb/js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="mdb/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="mdb/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="mdb/js/mdb.min.js"></script>
<style>

</style>
  <!--Main Navigation-->
<!-- Main navigation -->
<header>
  

  
<div class="container">
 
    <div class="header-content row vcard">
      
                <div class="logo col-md-3">
      <!-- Your site title as branding in the menu -->
      <div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Выберите город
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">г.Бахмут Донецкая область</a>
    <a class="dropdown-item" href="#">г.Киев</a>
    
  </div>
</div>
        <!-- end custom logo -->
                </div>
<div class="col-md-3">
<div class="contacts">       

         <div class="email"><i class="fa fa-envelope" aria-hidden="true"></i>
oslss@slsl.com</a></div>
<div class="email"><i class="fa fa-phone" aria-hidden="true"></i>
066-222-22-22</a></div>

  </div>
</div>
         <div class="col-md-6">
        <div class="contacts adr">   
        <div class="phone"><i class="fa fa-home" aria-hidden="true"></i> <span class="js-place" style="font-size:14px;color: #000;">
          <span class="locality">г. Киев</span>, <span class="street-address">ул. Первомайская, д. 78</span></span></div>
<div class="phone"><i class="fa fa-clock-o" aria-hidden="true"></i><span style="font-size:14px;color: #000;" class="js-city-work-time">Режим работы: <span class="workhours">8:30 - 19:00. Сб-Вс выходные</span></span>				</div>
  </div>
</div>
    </div>    
</div>

  <!--Navbar-->
  
  <nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="d-flex w-50 order-0">
        <img src="mdb/img/mainlogo.png" alt="" srcset="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse justify-content-center order-2" id="collapsingNavbar">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Главная <span class="sr-only">Home</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="//codeply.com">Услуги</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Цены</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Работы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Блог</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Контакты</a>
            </li>
        </ul>
    </div>
    <span class="navbar-text small text-truncate mt-1 w-50 text-right order-1 order-md-last"></span>
</nav>
  

  




  <!-- Navbar -->
  <!-- Full Page Intro -->
  <div class="view" style="background-image: url('mdb/img/slider1.png'); background-repeat: no-repeat; background-size: cover; background-position: center center; ">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-indigo-strong d-flex justify-content-center align-items-center ">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row pt-lg-5 mt-lg-5">
          <!--Grid column-->
          <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left slideOutUp"
            data-wow-delay="0.3s">
            <h1 class="display-4 font-weight-bold ">Порашковая покраска г.Киев</h1>
            <hr class="hr-light ">
            <h6 class="mb-3">Наша компания предлагает услуги по порошковой покраске металла и металлоконструкций в Киеве. RAL (около 250).</h6>
        <a href="{{url('/offer')}}" class="btn btn-outline-white">Мы предлагаем</a>
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-md-12 col-xl-5 mb-4 ">
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
       
<!--Carousel Wrapper-->
<!--Carousel Wrapper-->

  <!--/.Carousel Wrapper-->
  <!--/.Carousel Wrapper-->
            <script>new WOW().init();</script>
            <div class="modal fade top" id="modalCookie1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" data-backdrop="false">
  
</div>
<!--Section: Features v.4-->
<div class="container">
<section>

    <!--Section heading-->
    <center><h3 style="margin-top:220px;">Почему мы лучшие на рынке?</h3></center>
    <!--Section description-->
    <p class="px-5 mb-5 pb-3 lead grey-text text-center">sdsdsdsdds</p>
  
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
      <div class="col-md-4 mb-2 center flex-center ">
        
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
      <iframe id="map-container" frameborder="0" style="border:0"
                      src="https://maps.google.com/maps?q=%D0%9A%D0%B8%D0%B5%D0%B2&t=&z=13&ie=UTF8&iwloc=&output=embed" >
                  </iframe>
    </div>
    <!--Grid row-->
  
  </section>
</div>

<script>
new WOW().init();
</script>
  <!--/Section: Features v.4-->
    </body>
    
    <div class="content">
      </div>
          <footer id="myFooter">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-3">
                          <h5>Get started</h5>
                          <ul>
                              <li><a href="#">Home</a></li>
                              <li><a href="#">Sign up</a></li>
                              <li><a href="#">Downloads</a></li>
                          </ul>
                      </div>
                      <div class="col-sm-3">
                          <h5>About us</h5>
                          <ul>
                              <li><a href="#">Company Information</a></li>
                              <li><a href="#">Contact us</a></li>
                              <li><a href="#">Reviews</a></li>
                          </ul>
                      </div>
                      <div class="col-sm-3">
                          <h5>Support</h5>
                          <ul>
                              <li><a href="#">FAQ</a></li>
                              <li><a href="#">Help desk</a></li>
                              <li><a href="#">Forums</a></li>
                          </ul>
                      </div>
                      <div class="col-sm-3">
                          <h5>Legal</h5>
                          <ul>
                              <li><a href="#">Terms of Service</a></li>
                              <li><a href="#">Terms of Use</a></li>
                              <li><a href="#">Privacy Policy</a></li>
                          </ul>
                      </div>
                  </div>
                  <!-- Here we use the Google Embed API to show Google Maps. -->
                  <!-- In order for this to work in your project you will need to generate a unique API key.  -->
                  
              </div>
              <div class="social-networks">
                  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
              </div>
              <div class="footer-copyright">
                  <p>© 2016 Copyright Text </p>
              </div>
          </footer>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>
