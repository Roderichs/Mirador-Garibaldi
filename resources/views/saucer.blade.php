<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <link rel="shortcut icon" href="{{ asset('img/icon.png') }}" />
            <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="style.css" rel="stylesheet" type="text/css">
    <!-- FONTAWESOME : https://kit.fontawesome.com/a23e6feb03.js -->
    <link rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.  5/jquery.mCustomScrollbar.min.css">
   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Garibaldi</title>

    <script src="{{ asset('js/icons.js') }}"></script>

<style>
    *, *:after, *:before {
      box-sizing:border-box;
      -moz-box-sizing:border-box;
      -webkit-box-sizing:border-box;
    }
    .blue {
      background: #18171c;
      color: #fff;
    }
    .navbar {
      padding: 0.5px 1%;
    }
    #logo {
      display: inline-block;
      margin-top: 5px;
      color: #fff;
    }
    #link {
      color: #fff;
      font-weight: bold;
      margin: 0 1px;
    }
    i { margin: 0 3px; }
    #sidebarCollapse {
      color: #fff;
      background: transparent;
      outline: none;
      margin: 0 20px;
    }
    #sidebarCollapse:hover {
      color: #fff;
      background: #ddd;
      outline: none;
    }
    .wrapper {
      display: flex;
      width: 100%;
      align-items: stretch;
    }.wrapper {
      display: flex;
      width: 100%;
      align-items: stretch;
    }#sidebar {
        background-color:rgb(194,194,194);
        opacity:0.3; /* Opacidad 60% */
        min-width: 250px;
        max-width: 250px;
        margin-top: 50px;

        color: #000;
        transition: all 0.3s;
    }
    #sidebar.active{
        margin-left: -250px;
    }

    #sidebar .sidebar-header{
        padding: 20px;
        background: #000;
    }
    #sidebar ul.components{
        padding: 20px 0px;
    }

    #sidebar ul p{
        padding: 10px;
        font-size: 1.1em;
        display: block;
    }

    #sidebar ul li a{
        padding: 10px 10px 10px 20px;
        font-size: 1.1em;
        display: block;
        color: #000;
        font-weight: bold;
    }
    #sidebar ul li a:hover {
        color: #6240bd;
        background: #ddd;
        text-decoration: none;
    }

    #sidebar ul li.active>a,
    a[aria-expanded="true"] {
        color: #000;
        background: #8a5fff;
    }
    a[data-toggle="collapse"] {
        position: relative;
    }
    .dropdown-toggle::after {
        display: block;
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
    }

    #content {
        width: 100%;
        padding: 40px;
        min-height: 100vh;
        transition: all 0.3s;
        margin-top: 70px;
    }
    @media (max-width:800px) {
      #sidebar {
        margin-left: -250px;}
      #sidebar.active{
        margin-left: 0px;
      }
      #sidebarCollapse span{
        display: none;
      }
      .card {
        width:100%;
      }
    }
    @media (max-width:400px) {
      #sidebar {
        margin-top: -20px;
      }
      #logo {
        display: none;
      }
    }
</style>      

    </head>
    <body style="
            margin: 0;
            min-height: 100vh;
            background-image: url({{ asset('img/body.jpg') }});
            background-repeat: no-repeat; 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            ">

            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/1.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="font-italic">WHO SHARES YOUR FOOD</h5>
                            <p class="font-italic">Life does not pass alone</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/2.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="font-italic">THE CLEAR MIND</h5>
                            <p class="font-italic">And the dark beer</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/3.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="font-italic">DON'T DRINK FOR TOMORROW</h5>
                            <p class="font-italic">What you can drink today</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

    <nav class="navbar navbar-expand-lg navbar-light blue fixed-top">
        <button id="sidebarCollapse" class="btn navbar-btn">
             <i class="fas fa-lg fa-bars"></i>
        </button>
        <a class="navbar-brand">
            <h3 id="logo">
                <p class="font-italic">Mirador Garibaldi</p>
            </h3>
        </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"   data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @if (Route::has('login'))
                    <div class="top-right links">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                @auth
                                    <a href="{{ url('/home') }}"> 
                                        <i class="fas fa-sign-out-alt" class="font-italic" style="color: #fff;">Home</i>
                                    </a>
                                @else
                                    <a href="{{ route('login') }}">
                                        <i class="fas fa-sign-out-alt" class="font-italic" style="color: #fff;">  Login  </i>
                                    </a>
                            </li>
                             <li class="nav-item">
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">
                                            <!-- 
                                                <i class="fas fa-id-card" class="font-italic" style="color: #fff; "> Register</i>
                                            -->
                                        </a>
                                    @endif
                                @endauth
                            </li>
                        </ul>
                    </div>
                @endif
            </ul>    
        </div>
    </nav>
     
    <div class="wrapper fixed-left">
        <nav id="sidebar">
            <ul class="list-unstyled components">

                <li>
                    <a href="{{ url('/') }}"><i class="fas fa-bell"></i>{{ __(' Start') }}</a>
                </li>
                <li>
                    <a href="{{ url('/charter') }}"><i class="fas fa-utensils"></i>{{ __(' Charter') }}</a>
                </li>
                <li>
                    <a href="{{ url('/information') }}"><i class="fas fa-comments"></i>{{ __(' Information') }}</a>
                </li>

            </ul>
        </nav>

        <div id="content">
          
            <nav class="navbar navbar-light" style="justify-content: center;">

                <button type="button" class="btn btn-dark">
                    <a href="{{ url('/charter') }}" style="color: #fff;">
                        Return
                    </a>
                </button>
              
                <div id="content" class="font-italic" style="color: #000;">
                    <H1 style="text-align: center;">"Saucers"</H1>

                   
                </div>

            </nav>

<h3 class="font-italic" style="color: #000;">Ahogadas</h3>
<h6 class="font-italic" style="color: #000;">de 9:00 - 6:00 pm</h6>
<br/>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/carnita.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Carnita</h5>
      <p class="card-text"><small class="text-muted">Torta $ 29.00, ORD 3 $ 29.00</small></p>
      <p class="card-text"><small class="text-muted">ORD 4 $ 37.00, Taco IND $ 13.00</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/panela.jpeg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Panela</h5>
        <p class="card-text"><small class="text-muted">Torta $ 29.00, ORD 3 $ 29.00</small></p>
        <p class="card-text"><small class="text-muted">ORD 4 $ 37.00, Taco IND $ 13.00</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/camaron.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Camar??n</h5>
 <p class="card-text"><small class="text-muted">Torta $ 45.00, ORD 3 $ 45.00</small></p>
      <p class="card-text"><small class="text-muted">ORD 4 $ 59.00, Taco IND $ 19.00</small></p>
    </div>
  </div>
</div>
<br/>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/tiritas.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Tiritas</h5>
 <p class="card-text"><small class="text-muted">ORD 3 $ 45.00</small></p>
      <p class="card-text"><small class="text-muted">ORD 4 $ 59.00, Taco IND $ 19.00</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/carnitaspanela.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Carnitas y panela</h5>
 <p class="card-text"><small class="text-muted">Torta $ 39.00, ORD 3 $ 39.00</small></p>
      <p class="card-text"><small class="text-muted">ORD 4 $ 47.00, Taco IND $ 17.00</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/camaroncarnitas.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Camar??n y carnitas</h5>
 <p class="card-text"><small class="text-muted">Torta $ 55.00, ORD 3 $ 55.00</small></p>
      <p class="card-text"><small class="text-muted">ORD 4 $ 69.00, Taco IND $ 23.00</small></p>
    </div>
  </div>
</div>
<br/>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/pulpo.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Camar??n y pulpo</h5>
 <p class="card-text"><small class="text-muted">Torta $ 60.00, ORD 3 $ 60.00</small></p>
      <p class="card-text"><small class="text-muted">ORD 4 $ 75.00, Taco IND $ 25.00</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/garibaldi.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Garibaldi</h5>
 <p class="card-text"><small class="text-muted">ORD 3 $ 45.00</small></p>
      <p class="card-text"><small class="text-muted">ORD 4 $ 59.00, Taco IND $ 19.00</small></p>
    </div>
  </div>
</div>
<br/>
 <h3 class="font-italic" style="color: #000;">Tostadas y Mariscos</h3>
<h6 class="font-italic" style="color: #000;">de 9:00 - 6:00 pm</h6>
<br/>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/cevichedepescado.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Ceviche de pescado</h5>
      <p class="card-text"><small class="text-muted">$ 15.00</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/cevichegaribaldi.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Ceviche Garibaldi</h5>
      <p class="card-text"><small class="text-muted">$ 25.00</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/calamar.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Calamar</h5>
      <p class="card-text"><small class="text-muted">$ 19.00</small></p>
    </div>
  </div>
</div>
<br/>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/surimi.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Surimi</h5>
      <p class="card-text"><small class="text-muted">$ 19.00</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/tiritaspescado.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Tiritas de pescado</h5>
      <p class="card-text"><small class="text-muted">$ 19.00</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/camaronT.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Camar??n</h5>
      <p class="card-text"><small class="text-muted">$ 25.00</small></p>
    </div>
  </div>
</div>
<br/>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/pulpoo.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Pulpo</h5>
      <p class="card-text"><small class="text-muted">$ 29.00</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/pulpoenamorado.png') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Pulpo Enamorado</h5>
      <p class="card-text"><small class="text-muted">$ 35.00</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/garibaldy.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Garibaldi (camar??n & sazonador)</h5>
      <p class="card-text"><small class="text-muted">$ 140.00</small></p>
    </div>
  </div>
</div>
<br/>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/ordenceviche.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Orden de Ceviche</h5>
      <p class="card-text"><small class="text-muted">$ 100.00</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/sara.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Camarones Zarandeados</h5>
      <p class="card-text"><small class="text-muted">$ 140.00</small></p>
    </div>
  </div>
</div>
<br/>
 <h3 class="font-italic" style="color: #000;">Cocteles</h3>
<h6 class="font-italic" style="color: #000;">de 9:00 - 6:00 pm</h6>
<br/>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/coctelcamaron.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Camar??n</h5>
      <p class="card-text"><small class="text-muted">Chico $ 59.00, Mediano $ 79.00 y Grande $ 99.00</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/coctelpulpo.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Pulpo</h5>
      <p class="card-text"><small class="text-muted">Chico $ 69.00, Mediano $ 89.00 y Grande $ 119.00</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/coctelcalamar.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Calamar</h5>
      <p class="card-text"><small class="text-muted">Chico $ 45.00, Mediano $ 65.00 y Grande $ 85.00</small></p>
    </div>
  </div>
</div>
<br/>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/camaronpulpo.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Camar??n y pulpo</h5>
      <p class="card-text"><small class="text-muted">Chico $ 69.00, Mediano $ 89.00 y Grande $ 119.00</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/camaronpulpocamaron.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Camar??n, calamar y pulpo</h5>
      <p class="card-text"><small class="text-muted">Chico $ 69.00, Mediano $ 89.00 y Grande $ 119.00</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/coctelgaribaldi.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Garibaldi</h5>
      <p class="card-text"><small class="text-muted">Chico $ 69.00, Mediano $ 89.00 y Grande $ 119.00</small></p>
    </div>
  </div>
</div>
<br/>
 <h3 class="font-italic" style="color: #000;">Hamburguesas</h3>
<h6 class="font-italic" style="color: #000;">de 3:00 - 10:30 pm</h6>
<br/>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/h.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Hamburguesa</h5>
      <p class="card-text"><small class="text-muted">$ 80.00</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/hot.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Hot-Dog</h5>
      <p class="card-text"><small class="text-muted">$ 75.00</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/papas.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Papas</h5>
      <p class="card-text"><small class="text-muted">$ 30.00</small></p>
    </div>
  </div>
</div>
<br/>
 <h3 class="font-italic" style="color: #000;">Postres</h3>
<br/>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/cafe.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Caf?? c/galletas (3pzs.)</h5>
      <p class="card-text"><small class="text-muted">$ 25.00</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/nutella.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Tortita de nutella</h5>
      <p class="card-text"><small class="text-muted">$ 15.00</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/cajeta.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Tortita de cajeta</h5>
      <p class="card-text"><small class="text-muted">$ 15.00</small></p>
    </div>
  </div>
</div>
<br/>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/nieve.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Nieve</h5>
      <p class="card-text"><small class="text-muted">$ 30.00</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/carlota.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Carlota</h5>
      <p class="card-text"><small class="text-muted">$ 25.00</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/bombones.png') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Bombones quemados</h5>
      <p class="card-text"><small class="text-muted">$ 30.00</small></p>
    </div>
  </div>
</div>
        </div>

      </div>
    
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="script.js"></script>

    <script>
        $(document).ready(function() { 
        $('#sidebarCollapse').on('click', function() { 
        $('#sidebar, #content').toggleClass('active'); 
        $('.collapse.in').toggleClass('in'); 
        $('a[aria-expanded=true]').attr('aria-expanded', 'false'); document.getElementById("bodyContent").style.width="100%"; 
        }); 
        });
    </script>  

<div class="card-footer text-muted" style="background: #000;">
        <ul class="list-inline" style="text-align: center;">
            <li class="list-inline-item">
                <p class="font-italic" style="color: #fff; ">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-globe" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M1.018 7.5h2.49c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5zM2.255 4H4.09a9.266 9.266 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.024 7.024 0 0 0 2.255 4zM8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm-.5 1.077c-.67.204-1.335.82-1.887 1.855-.173.324-.33.682-.468 1.068H7.5V1.077zM7.5 5H4.847a12.5 12.5 0 0 0-.338 2.5H7.5V5zm1 2.5V5h2.653c.187.765.306 1.608.338 2.5H8.5zm-1 1H4.51a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm1 2.5V8.5h2.99a12.495 12.495 0 0 1-.337 2.5H8.5zm-1 1H5.145c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12zm-2.173 2.472a6.695 6.695 0 0 1-.597-.933A9.267 9.267 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM1.674 11H3.82a13.651 13.651 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm8.999 3.472A7.024 7.024 0 0 0 13.745 12h-1.834a9.278 9.278 0 0 1-.641 1.539 6.688 6.688 0 0 1-.597.933zM10.855 12H8.5v2.923c.67-.204 1.335-.82 1.887-1.855A7.98 7.98 0 0 0 10.855 12zm1.325-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm.312-3.5h2.49a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.91 4a9.277 9.277 0 0 0-.64-1.539 6.692 6.692 0 0 0-.597-.933A7.024 7.024 0 0 1 13.745 4h-1.834zm-1.055 0H8.5V1.077c.67.204 1.335.82 1.887 1.855.173.324.33.682.468 1.068z"/>
                    </svg>
                    <a href="https://www.facebook.com/miradorgaribaldi/" style="color: #fff; "> mirador_garibaldi</a>
                </p>
            </li>
            <li class="list-inline-item">
                <p class="font-italic" style="color: #fff; ">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
                    </svg>
                    Call +1 417-688-1390
                </p>
            </li>
            <footer class="blockquote-footer">Copyright <cite title="Source Title">Roder??ck & Mirador Garibaldi</cite></footer>
        </ul>
    </div> 

      </body>
</html>