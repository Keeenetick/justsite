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

 </head>
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar z-depth-5 ">
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
            <a class="nav-link" href="{{url('')}}">Главная
              <span class="sr-only">(current)</span>
            </a>
          </li>
          
          <li class="nav-item active">
            <a class="nav-link " href="{{url('/offer')}}">Услуги</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{url('/price')}}">Цены</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Наши работы</a>
              </li>
            <li class="nav-item ">
            <a class="nav-link" href="{{url('/blog')}}">Блог</a>
              </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Контакты</a>
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
              {{-- <li class="nav-item">
                <a class="nav-link"><i class="fa fa-facebook"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link"><i class="fa fa-twitter"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link"><i class="fa fa-instagram"></i></a>
              </li> --}}
            </ul>
          </div>
        </form>
      </div>
    </div>
  </nav>
<style>
.card-deck{
    margin-top: 150px;
}
</style>
  <body>
      <div class="container">
          <h3 class="h3">shopping Demo-2 </h3>
          <div class="row">
              @foreach ($products as $product)
              <div class="col-md-3 col-sm-6">
                  <div class="product-grid2">
                      <div class="product-image2">
                          <a href="#">
                          <img class="pic-1" src="{{ Voyager::image($product->image) }}">
                          <img class="pic-2" src="{{ Voyager::image($product->image) }}">
                          </a>
                          <a class="add-to-cart" data-toggle="modal" data-target="#modalLoginAvatar" href="">Заказать</a>
                      </div>
                      <div class="product-content">
                          <h3 class="title"><a href="#">{{$product->body}}</a></h3>
                          <span class="price">{{$product->price}}</span>
                      </div>
                  </div>
              </div>
              @endforeach
          </div>
  <center>
  
                    @if(Session::has('success'))
                      <div class="alert alert-success d-inline-flex p-2 ">
                       {{ Session::get('success') }}
                      </div>
                    @endif
  
</center>
  <div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
    <!--Content-->
    <div class="modal-content">
      <div class="modal-header">
        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%281%29.jpg" alt="avatar" class="rounded-circle img-responsive">
        </div>
      <div class="modal-body text-center mb-1">
      <h5 class="mt-1 mb-2"></h5>
      {!! Form::open(['route' => 'offer.store'] ) !!}
     
        <div class="md-form ml-0 mr-0">
        <input type="text"  name = "name" type="text" class="form-control form-control-sm validate ml-0" placeholder="Ваше имя" >
        </div>
        <div class="md-form ml-0 mr-0">
          <input type="text" name="offername" type="text" id="form29" class="form-control form-control-sm validate ml-0" placeholder="Название услуги">
        </div>
        <div class="md-form ml-0 mr-0">
          <input type="text" name="phone" type="text" id="form29" class="form-control form-control-sm validate ml-0" placeholder="Ваш телефон">
        </div>
        <div class="text-center mt-4">
        <button class="btn btn-cyan mt-1">Заказать<i class="fa fa-sign-in ml-1"></i></button>
        </div>
        {!!Form::close()!!}
        
      </div>
    </div>
  </div>
</div>

</body>