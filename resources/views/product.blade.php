@extends('index')
@section('content')
<div class="container-fluid">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          @foreach ($products as $item)
        
            <div class="carousel-item {{$item['id']=='16'?'active':''}}">
                <img src="{{$item['gallery']}}" class="d-block w-100" alt="...">
              </div>
         
          @endforeach
          
        </div>
      </div>
</div>
<div class="container-fluid">
    <div class="container">
    <h2 class="heding">Trending Products</h2>
    <div class="row">
    @foreach ($products as $item)
        <div class="col-md-3 item_vart"><a class="item" href="/detail/{{$item['id']}}"><img width="220px" height="240px" src="{{$item['img']}}" alt="">
          <h6>{{$item['name']}}</h6>
          <h6>{{$item['description']}}</h6>
        </a></div>
    @endforeach
</div>
</div>
</div>
@endsection