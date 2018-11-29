<div class="container">
      <div class="row">
        <div class="col-lg-8">
          @foreach ($posts as $post)
        <h1 class="mt-4">{{$post->title}}</h1>  
          <hr>
          <p>Posted on {{$post->created_at}}</p>
          <hr>
          <img class="img-fluid rounded" src="{{Voyager::image($post->thumbnail('small'))}}" alt="">
          <hr>
          <p>{!!$post->body!!}</p>
          <hr>      
          @endforeach
        </div>