

<link rel="stylesheet" href="{{ asset('css/EditarProducto.css') }}" />


@include('components.navbar')

<div class="container-fluid">
    <div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-2" id="imagenEditarProducto">
    <img src="{{$productoImagen->imagen}} ">
    </div>
    <div class="col-md-2">
    </div>
    <div class="col-md-4" id="segundaFilaProducto">
        <p>{{$producto->marca}} {{$producto->modelo}}<p>
        <div class="mejorar">
        <p class="precio">{{$producto->precio}}<p>
        <p>stock: {{$producto-> stock }} <p>
        <a class="letras">Cantidad<a/>
        </div>
    </div>



    </div>

</div>
<script src="{{ asset('js/carrito.js') }}"></script>
