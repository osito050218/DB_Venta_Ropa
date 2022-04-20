<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
       

            <div class="content">
                

<nav class="navbar navbar-light" style="background-color: #FFE4E1;">
  <div class="container-fluid ">
    <a class="navbar-brand" style="color:#000000" href="#" > <h4><b> VENTA DE ROPA MAYBRAN </b></h4> </a>
    @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a style="color:#000000" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a style="color:#000000" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif   
  </div>
</nav>

 <br>

<!--INICIO DEL CARUSEL-->
<section class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.pexels.com/photos/1336873/pexels-photo-1336873.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="0">
    </div>
    <div class="carousel-item">
      <img src="https://images.pexels.com/photos/1884584/pexels-photo-1884584.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="100">
    </div>
    <div class="carousel-item">
      <img src="https://images.pexels.com/photos/102129/pexels-photo-102129.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="100">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--FIN DEL CARISEL-->
<br>

<!-- INICIO DEL CARD -->
<div class="row row-cols-1 row-cols-md-4 g-4">

  <div class="col">
    <div class="card">
          <img src="https://images.pexels.com/photos/1937336/pexels-photo-1937336.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" height="455" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text">Sacos de lana</p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
   <img src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text">Conjuntos de ropa</p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="https://images.pexels.com/photos/10831402/pexels-photo-10831402.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"  class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text">Zapatos de tacon</p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="https://images.pexels.com/photos/4273288/pexels-photo-4273288.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"  class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text">Zapatillas</p>
      </div>
      </div>
    </div>

  </div>
  <!-- FIN DEL CARD -->

            </div>
        </div>
    </body>
</html>
