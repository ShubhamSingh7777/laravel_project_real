
@extends('index')
@section('content')
<div class="container-fluid">
        @foreach ($pro as $products)
        <div class="row cartlist">
        <div class="col-md-4"><img width="80%" src="{{$products->img}}" alt=""></div>
        <div class="col-md-4">
            <h1 class="hading_det"><span class="na">Name</span> :{{$products->name}}</h1>
            <h2 class="hading_det"><span class="na">Category</span>: {{$products->category}}</h2>
            <h4 class="hading_det"><span class="na">price</span>: {{$products->price}}</h4>
            <h4 class="hading_det"><span class="na">Description</span>: {{$products->description}}</h4>
            <br>
        </div>
        <div class="col-md-4"><a href="/remove/{{$products->cart_id}}" class="btn btn-danger">remove_to_card</a></div>
    </div>
</div>
    @endforeach
    <div class="" style="text-align: center"><a href="/order" class="btn btn-success"> buy </a></div>
@endsection
