<?php
use App\Http\Controllers\ProductController;

$cart=0;
if(Session::has('user')){
  $cart=ProductController::cartitem();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      @if (Session::has('user'))
      <a class="navbar-brand" href="#">{{Session::get('user')['name']}}</a>
      @endif
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="myorder">orders</a>
          </li>
        
        </ul>
        
          <ul class="d-flex">
            @if (Session::has('user'))
            <li class="cart-list"><a class="nav-link " href="cartlist">cart <span class="cart">[{{$cart}}]</span></a></li>
            <li class="cart-list"><a href="logout"><span class="cart">logout</span></a></li>
            @else
            <li class="cart-list"><a class="nav-link " href="#">cart <span class="cart">[{{$cart}}]</span></a></li> 
            <li class="cart-list"><a  href="login"><span class="cart">login</span></a></li>
            <li class="cart-list"><a  href="register"><span class="cart">register</span></a></li>                
             @endif
          </ul>
        
      </div>
    </div>
  </nav>