<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Perfil</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      		<a class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
	      		Perfil @auth de {{Auth::user()->name}} @endauth
	    	</a>
	    	<div class="col-md-3 text-end">
	        	<a href="{{route('logout')}}"><button type="button" class="btn btn-outline-primary me-2">Salir</button></a>
	        </div>
	    </header>
	</div>
	@extends('layouts.base')

@section('content')

@include('msjs')

<div class="row">
    <div class="col-12">
        <div>
            <h2>Actualizar datos</h2>
        </div>
    </div>

    <form action="{{route('changePassword')}}" method="POST" class="needs-validation" novalidate>
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                    <input type="hidden" name="id" class="form-control" placeholder="" value="{{Auth::user()->id}}" >
                </div>
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Nombre" value="{{Auth::user()->name}}" >
                </div>
                <div class="form-group">
                    <strong>Apellidos:</strong>
                    <input type="text" name="lastnames" class="form-control" placeholder="Apellidos" value="{{Auth::user()->lastnames}}" >
                </div>
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" class="form-control" placeholder="Email" value="{{Auth::user()->email}}" >
                </div>
                <div class="form-group">
                    <strong>Telefono:</strong>
                    <input type="text" name="phone" class="form-control" placeholder="Telefono" value="{{Auth::user()->phone}}" >
                </div>
                <div class="form-group">
                    <strong>Rol:</strong>
                    <input type="text" name="rol" class="form-control" placeholder="Rol" value="{{Auth::user()->rol}}" >
                </div>
                <div class="form-group">
                    <strong>Contraseña:</strong>
                    <div><input type="password" id="passbox" name="password" class="form-control" placeholder="Contraseña Actual" value="" disabled></div>
                    <div><input type="password" id="passbox1" name="newpassword" class="form-control" placeholder="Nueva Contraseña" value="" disabled></div>
                    <div><input type="password" id="passbox2" name="confnewpassword" class="form-control" placeholder="Confirmar Nueva Contraseña" value="" disabled></div>
            <center><button type="button" class="btn btn-primary" id="togglePass" onclick="togglePassword()">Activar cambio de contraseña</button></center>
</div>

<script>
    var Activo = false;

    function togglePassword() {
        Activo = !Activo; // Alterna el estado
        var passbox1 = document.getElementById("passbox");
        var passbox2 = document.getElementById("passbox1");
        var passbox3 = document.getElementById("passbox2");

        passbox1.disabled = !Activo;
        passbox2.disabled = !Activo;
        passbox3.disabled = !Activo;

        // Borra el contenido si se desactivan
        if (!Activo) {
            passbox1.value = "";
            passbox2.value = "";
            passbox3.value = "";
        }

        document.getElementById("togglePass").innerText = Activo ? "Desactivar cambio de contraseña" : "Activar cambio de contraseña"; // Cambia el texto del botón
    }
</script>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
            <button type="submit" class="btn btn-primary" id="formSubmit">Guardar Cambios</button>
				<a href="{{route('usuarios.index')}}" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </form>
</div>
@endsection
	</article>
</body>
</html>