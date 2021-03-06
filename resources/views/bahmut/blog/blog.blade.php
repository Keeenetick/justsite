
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
  <link href="/mdb/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="/mdb/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="/mdb/css/style.css" rel="stylesheet">
  <link href="/mdb/css/style.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/mdb/css/ownstyle.css">

        <script type="text/javascript" src="/mdb/js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="/mdb/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="/mdb/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="/mdb/js/mdb.min.js"></script>
  
 </head>


 <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar z-depth-5 ">
    <div class="container">
      <a class="navbar-brand " href="#">
          <img src="/mdb/img/mainlogo.png" alt="" srcset="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
        aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="{{url('bahmut')}}">Главная
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="#">Наши клиенты</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('bahmut/offer')}}">Услуги</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Контакты</a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="{{url('bahmut/blog')}}">Блог</a>
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
                    <a class="dropdown-item" href="{{url('/')}}">г.Киев</a>
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
    <body >
<div class="container ">
  

    <div class="jumbotron text-center z-depth-5">

        <!-- Title -->
        <h4 class="card-title h4 pb-2"><strong></strong></h4>
      
        <!-- Card image -->
        <div class="view overlay my-4">
          <img src="" class="img-fluid " alt="">
          <a href="#">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
      
        <h5 class="indigo-text h5 mb-4"></h5> 
      
        <p class="card-text"></p>
      
        <!-- Linkedin -->
        <a class="fa-lg p-2 m-2 li-ic"><i class="fa fa-linkedin grey-text"></i></a>
        <!-- Twitter -->
        <a class="fa-lg p-2 m-2 tw-ic"><i class="fa fa-twitter grey-text"></i></a>
        <!-- Dribbble -->
        <a class="fa-lg p-2 m-2 fb-ic"><i class="fa fa-facebook grey-text"></i></a>
      
      </div>
       <!-- Ju

</div>
   mbotron -->

  <!-- Jumbotron -->
        <!-- Sidebar Widgets Column -->
      
    
    </body>
</html>
