@extends('index')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
                <div class="col-md-4  login_form">
                    <form action="/register" method="post">
                        @csrf
                        <p>email: &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="email" placeholder="email" id=""></p>
                        <p>name: &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="name" placeholder="email" id=""></p>
                        <p>password: <input type="password" name="password" placeholder="password" id=""></p>
                        <p><input type="submit" value="submit" name="submit"></p>
                    </form>
                </div>
                <div class="col-md-4"></div>
        </div>
    </div>

@endsection