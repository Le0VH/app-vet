
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/Styles.css">
</head>

<html>
    
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="POST" action="{{route('inicia-sesion')}}">
						@csrf
						<div class="mb-1">
							<label for="emailInput" class="form-label"></label>
							<input type="email" class="form-control" id="emailInput" name="email" required placeholder="Email">
						  </div>
						  <div class="mb-2">
							<label for="passwordInput" class="form-label"></label>
							<input type="password" class="form-control" id="passwordInput" name="password" required placeholder="Contraseña">
						  </div>
						  <div class="mb-3 form-check">
							<input type="checkbox" class="form-check-input" id="rememberCheck" name="remember">
							<label class="form-check-label" for="rememberCheck">Mantener sesión iniciada</label>
						  </div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="button" class="btn login_btn">Acceder</button>
				   </div>
					</form>
				</div>
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						¿No tienes cuenta? <a href="{{route('registro')}}" class="ml-2">Registrarse</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">¿Olvido su contraseña?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>





<!--<body>
	<main class="container align-center p-5">
		<form method="POST" action="{{route('inicia-sesion')}}">
			@csrf
		  <div class="mb-3">
		    <label for="emailInput" class="form-label">Email</label>
		    <input type="email" class="form-control" id="emailInput" name="email" required>
		  </div>
		  <div class="mb-3">
		    <label for="passwordInput" class="form-label">Password</label>
		    <input type="password" class="form-control" id="passwordInput" name="password" required>
		  </div>
		  <div class="mb-3 form-check">
		    <input type="checkbox" class="form-check-input" id="rememberCheck" name="remember">
		    <label class="form-check-label" for="rememberCheck">Mantener sesión iniciada</label>
		  </div>
		  <div>
		  	<p>¿No tienes cuenta? <a href="{{route('registro')}}">Regístrate</a></p>
		  </div>
		  <button type="submit" class="btn btn-primary">Acceder</button>
		</form>
	</main>


</body>
</html>
-->