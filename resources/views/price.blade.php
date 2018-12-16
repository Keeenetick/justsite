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

.containertable{
  width: 100%;
  text-align: center;
  margin-top: 170px;
  
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
          <li class="nav-item ">
          <a class="nav-link" href="{{url('/')}}">Главная
              <span class="sr-only">(current)</span>
            </a>
          </li>
          
          <li class="nav-item">
          <a class="nav-link" href="{{url('/offer')}}">Услуги</a>
          </li>
          <li class="nav-item active">
          <a class="nav-link " href="{{url('/price')}}">Цены</a>
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
  <div class="container">

  
    <div class="containertable">
     <a href="http://"> <h2> Плоские изделия — оцинкованный лист:</h2></a>
      <p>The .thead-dark class adds a black background to table headers, and the .thead-light class adds a grey background to table headers:</p>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>м2</th>
            <th></th>
            <th>грн</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>от 1000 м2</td>
            <td></td>
            <td>1000грн/м2</td>
          </tr>
          <tr>
            <td>от 1000 м2</td>
            <td></td>
            <td>1000грн/м2</td>
          </tr>
          <tr>
            <td>от 1000 м2</td>
            <td></td>
            <td>1000грн/м2</td>
          </tr>
        </tbody>
      </table>
  <hr>
      <a href="http://"> <h2> Гофрированные плоские изделия </h2></a>
      <p>The .thead-dark class adds a black background to table headers, and the .thead-light class adds a grey background to table headers:</p>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>м2</th>
            <th></th>
            <th>грн</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>от 1000 м2</td>
            <td></td>
            <td>1000грн/м2</td>
          </tr>
          <tr>
            <td>от 1000 м2</td>
            <td></td>
            <td>1000грн/м2</td>
          </tr>
          <tr>
            <td>от 1000 м2</td>
            <td></td>
            <td>1000грн/м2</td>
          </tr>
        </tbody>
      </table>
      <hr>
      <a href="http://"> <h2>  Погонажные изделия – (профили, трубы, обрамления, багеты и т.п.) периметр по сечению</h2></a>
      <p>The .thead-dark class adds a black background to table headers, and the .thead-light class adds a grey background to table headers:</p>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>м2</th>
            <th></th>
            <th>грн</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>от 1000 м2</td>
            <td></td>
            <td>1000грн/м2</td>
          </tr>
          <tr>
            <td>от 1000 м2</td>
            <td></td>
            <td>1000грн/м2</td>
          </tr>
          <tr>
            <td>от 1000 м2</td>
            <td></td>
            <td>1000грн/м2</td>
          </tr>
        </tbody>
      </table>
    
  </div>
</div>