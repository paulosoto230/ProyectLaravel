<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/cc84ce6b6c.js" crossorigin="anonymous"></script>
<div class="container-fluid">
<div class="row" id="titulo">
    <div class="col">
    </div>
    <div class="col-md-3">
        <img class="logo" src="{{ asset('img/pcsupply.png') }}">
    </div>
    <div class="col">

    </div>
</div>
   <div class="row">
   <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" id="iconoDesplegable">
            <i class="fa-solid fa-bars"></i>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
         <form method="" action="">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/prueba" id="inicio">INICIO</a>
            </li>
         </form> 
         <form method="get" action="">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('producto.index') }}" id="producto">PRODUCTOS</a>
            </li>    
         </form>
         <form method="" action="">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/login')}}" id="login">LOGIN</a>
            </li>
         </form>
         
            <li class="nav-item">
                <a class="nav-link" href="{{url('compra/create')}}" id="login">CARRITO</a>
            </li>
        
      </ul>
    </div>
</nav>
   </div>
</div>    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 


