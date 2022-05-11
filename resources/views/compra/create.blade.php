
@include('components.navbar') 

<section class="container mt-3">
    <ul class="list-group" id="carrito">
  
</section>

<footer id="footer" class="container mt-3">
    <template id="templateFooter">
        <div class="card">
            <div class="card-body d-flex justify-content-between align-items-center">
                <p class="lead mb-0"> Total $<span>1500</span></p>
                <button class="btn btn-outline-info">Finalizar compra</button>
            </div>
        </div>

    </template>
</footer>


<template id="template">
    <li class="list-group-item bg-secondary text-white">
        <span class="lead align-middle">Frutilla</span>
        <span class="badge bg-primary rounded-pill align-middle" id="cantidad">12</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <div class="div">
            <p class="lead mb-0" > Total: $<span id="total"></span></p>
        </div>
        <div> 
            <button class="btn btn-sm btn-danger">quitar</button>
            <button class="btn btn-sm btn-success">Agregar</button>
        </div>
    </ul>

    </template>

<script src="{{ asset('js/pintarCarrito.js') }}"></script>




