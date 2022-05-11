

@include('components.navbar') 
<link rel="stylesheet" href="{{ asset('css/login.css') }}" />

<div class="container-fluid">
    <div class="row">
       <div class="cuadroLogin">
           <div><h2>Iniciar Sesión</h2></div>
           <input class="login" type="text" name="usuario" size="23" maxlenght="30" placeholder="email"/>
           <br>
           <input class="login" type="text" name="contra" size="23" maxlenght="30" placeholder="contraseña"/>
           <br>
           <a class="noregis" href="">¿No estas registrado</a>
           <br>
           <button class="col-md-1" id="botonAceptar" type="submit" value="entrar" name="action">Aceptar</button>
       </div>
    </div>
</div>







