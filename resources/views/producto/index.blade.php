
@include('components.navbar') 

<div class="container my-5">

   
    <div class="row" id="card-dinamicas">
@foreach ($productos as $productos)
    <article class="col-12 col-md-6 col-lg-3 mb-3">
        <div class="card text-center shadow">
            <img src="{{$productos->imagen}}" alt="" class="card-img-top" id="imagen">
            <div class="card-body">
                <h5 class="card-title text-primary lead">${{$productos->precio}}</h5>
                <p class="lead text-secondary">{{$productos->marca}}</p>
                <button class="btn btn-primary"
                            data-Producto="{{$productos->id}}" data-precio="{{$productos->precio}}"
                            data-marca="{{$productos->marca}}" data-modelo="{{$productos->modelo}}"
                            data-id="{{$productos->id}}"
                            id="boton">
                        Agregar carrito
                </button>
                <a href="{{url('/producto/'.$productos->id.'/')}}" class="btn btn-primary ">ver producto</a>
              </div>
        </div>
    </article>
@endforeach
        
    </div>
  

</div>
<script src="{{ asset('js/carrito.js') }}"></script>