<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>e-commerce</title>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
   
    .login_form{
    background-color:rgba(0, 0, 0, 0.042);
    padding: 40px 10px;
    margin-top: 40px;
    border: 1px solid rgba(0, 0, 0, 0.244);
    box-shadow: 1px 0px 3px 1px wheat;
}
.login_form p{
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 18px;
    text-align: center;
}
.slider-img{
    height:500px !important; 
}
.carousel-inner h5{
    color: black;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: 25px;
}
.na{
    color: rgba(165, 42, 42, 0.888);
    font-size: 22px;
    font-family: 'Times New Roman', Times, serif;
}
.hading_det{
    font-size: 22px;
    font-family: 'Times New Roman', Times, serif;
}
.name{
    color: rgba(165, 42, 42, 0.888);
    font-size: 28px;
    font-family: 'Times New Roman', Times, serif;
}
.hading_detail
{
    font-size: 35px;
    font-family: 'Times New Roman', Times, serif;
}
.item h6{
   color: black;
   font-family: 'Times New Roman', Times, serif;
   font-size: 17px;
   text-align: center;
}
.btn-danger{
    margin-top: 20px;
}
.item{
    text-decoration: none;
}
.heding{
    text-align: center;
    font-family: 'Times New Roman', Times, serif;
    font-size: 44px;
    padding: 30px 0px;
}
.item_vart{
    box-shadow: 3px 2px 3px 1px rgba(150, 150, 149, 0.709);
    margin-bottom: 20px;
}
.cart{
    color:black;
    font-size: large;
    font-family: 'Times New Roman', Times, serif;
    text-decoration: none !important;
    padding-right: 10px;
}
.cart-list a{
    text-decoration:none;
}
.cart-list{
    list-style: none;
   
}
.cartlist
{
    margin-bottom: 30px;
}
</style>
</html>