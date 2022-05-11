<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PCSUPPLY</title>
</head>
<body>

    <div class="container-fluid">

        <div class="row">
       @include('components.navbar') 
        </div>
        <div class="row" id="bienvenido">
            <h1>¡BIENVENIDO!</h1>
        </div>
    </div>
       <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('img/carusel1.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/carusel2.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/carusel3.jpg') }}" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
    </div>

    <div class="container-fluid">
        <div class="row" id="Descubre">
            <h1>
            ¡DESCUBRE NUEVOS PRODUCTOS!
            </h1>

        </div>
        <div class="row fila">
            <div class="cuadro">
                <a href=""><img class="imagenfilas" src="{{asset('img/menu1.jpg') }}"></a>
            </div>
            <div class="cuadro">
            <a href=""><img class="imagenfilas" src="{{asset('img/menu2.jpg') }}"></a>
            </div>
            <div class="cuadro">
            <a href=""><img class="imagenfilas" src="{{asset('img/menu3.jpg') }}"></a>
            </div>
        </div>
    </div>
    

   





    





    

   
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 


</body>
</html>