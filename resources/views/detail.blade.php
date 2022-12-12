
@extends('index')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6"><img width="100%" src="{{$detail['img']}}" alt=""></div>
        <div class="col-md-6">
            <h1 class="hading_detail"><span class="name">Name</span> :{{$detail['name']}}</h1>
            <h2 class="hading_detail"><span class="name">Category</span>: {{$detail['category']}}</h2>
            <h4 class="hading_detail"><span class="name">price</span>: {{$detail['price']}}</h4>
            <h4 class="hading_detail"><span class="name">Description</span>: {{$detail['description']}}</h4>
            <br>
            <form action="/addtocard" method="post">
            @csrf
            <input type="hidden" name="product_id" value="{{$detail['id']}}" >
            <button type="submit" value="submit" name="submit" class="btn btn-primary">add to card</button>
        </form>
            <br>
            <form action="/mainorder" method="post">
             @csrf
            <input type="hidden" name="product_id" value="{{$detail['id']}}" >
            <button type="submit" value="submit" name="submit"  class="btn btn-danger">buy</button>
        </form>
        </div>
    </div>
</div>
@endsection
