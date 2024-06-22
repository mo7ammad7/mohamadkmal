<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>




    <div class="container-fluid">
      <div class="row bg-img">
         <nav class="navbar navbar-expanded-lg bg-dark fixed" dir="ltr">
            <div class="containar-fluid">
            <a class="navbar-brand text-warning" href="#">   OUR MEAL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarname" aria-controls="navbarname" aria-expanded="false" aria-lable="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end d-flex" id= "navbarname">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link nav-text active" aria-current="page" herf="#">Home</a></li>
                    <li class="nav-item mx-3"><a class="nav-link text-warning" href="#">Food</a></li>
                    <li class="nav-item mx-3"><a class="nav-link text-warning" href="#">Dilivary</a></li>
                    <li class="nav-item mx-3"><a class="nav-link text-warning" href="#">Invoices</a></li>
                    <li class="nav-item mx-3"><a class="nav-link text-warning" href="#">Restaurant</a></li>
                @if (Route::has ('login'))
                    @auth
                    <li class="nav-item mx-3">
                    <a href="{{ url('/home') }}" class="nav-link  text-warning">home</a>

                    </li>
                        @else
                        <li class="nav-item mx-3">
                           <a href="{{ route('login') }}" class="nav-link  text-warning">log in</a>
                        </li>

                        @if (Route::has('Register'))
                        <li class="nav-item mx-3">
                                                     <a href="{{ route('register') }}" class="nav-link text-warning">Register</a>
                        </li>
                        @endif
                        @endauth
                        @else
                        @endif




                </ul>
            </div>
          </div>
        </nav>
    </div>
    </div>
<div class="row my-3 justify-content-between mx-1 p-2 ">
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('img/p1.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body  ">
          <h5 class="card-title">Pizza</h5>
          <p class="card-text"></p>
<div class="row justify-content-cender">
    <a href="#" class="btn btn-warning">Order now</a>
            </div>
         </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="{{ asset('img/p2.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body  ">
          <h5 class="card-title">steak</h5>
          <p class="card-text"></p>
<div class="row justify-content-cender">
    <a href="#" class="btn btn-warning">Order now</a>
            </div>
         </div>
      </div>    <div class="card" style="width: 18rem;">
        <img src="{{ asset('img/p3.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body  ">
          <h5 class="card-title">Burger</h5>
          <p class="card-text"> </p>
<div class="row justify-content-cender">
    <a href="#" class="btn btn-warning">Order now</a>
            </div>
         </div>
      </div>    <div class="card" style="width: 18rem;">
        <img src="{{ asset('img/p4.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body  ">
          <h5 class="card-title">Broasted</h5>
          <p class="card-text"> </p>
<div class="row justify-content-cender">
    <a href="#" class="btn btn-warning">Order now</a>
            </div>
         </div>
      </div>
