
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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

        <script type="text/javascript" src="mdb/js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="mdb/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="mdb/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="mdb/js/mdb.min.js"></script>
  
 </head>
<style>
.jumbotron{
  margin-top: 90px;
}
</style>
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar ">
    <div class="container">
      <a class="navbar-brand " href="#">
        <strong>MDB</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
        aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="{{url('')}}">Главная
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="#">Наши клиенты</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Услуги</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Контакты</a>
            </li>
            <li class="nav-item active">
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
              <li class="nav-item">
                <a class="nav-link"><i class="fa fa-facebook"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link"><i class="fa fa-twitter"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link"><i class="fa fa-instagram"></i></a>
              </li>
            </ul>
          </div>
        </form>
      </div>
    </div>
  </nav>
    <body >
<div class="container">
  
 @foreach ($posts as $post)
    <div class="jumbotron text-center">

        <!-- Title -->
        <h4 class="card-title h4 pb-2"><strong>{{$post->title}}</strong></h4>
      
        <!-- Card image -->
        <div class="view overlay my-4">
          <img src="{{Voyager::image($post->image)}}" class="img-fluid" alt="">
          <a href="#">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
      
        <h5 class="indigo-text h5 mb-4"></h5> 
      
        <p class="card-text">{!!$post->body!!}</p>
      
        <!-- Linkedin -->
        <a class="fa-lg p-2 m-2 li-ic"><i class="fa fa-linkedin grey-text"></i></a>
        <!-- Twitter -->
        <a class="fa-lg p-2 m-2 tw-ic"><i class="fa fa-twitter grey-text"></i></a>
        <!-- Dribbble -->
        <a class="fa-lg p-2 m-2 fb-ic"><i class="fa fa-facebook grey-text"></i></a>
      
      </div>
    @endforeach     <!-- Ju

</div>
   mbotron -->

  <!-- Jumbotron -->
        <!-- Sidebar Widgets Column -->
      
    
    </body>
</html>
