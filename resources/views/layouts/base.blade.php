<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Jūsō Pets</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="assets/Styles.css">
</head>
<body class="bg-dark text-white">
    <div class="container-fluid">


<!------ Include the above in your HEAD tag ---------->

<div class="container-fluid">
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('Home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        @if(Auth::check())
          <a class="nav-link active" href="{{ route('actualizarperfil') }}">{{ Auth::user()->name }}</a>
        @else
          <a class="nav-link active" href="{{ route('Iniciar_Sesion') }}">Login</a>
        @endif
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="{{ route('logout') }}">Salir</a>
      </li>
    </ul>

    <div class="mx-auto">
        <a class="navbar-brand" href="{{route('actualizarperfil')}}">
            <img src="https://i.ibb.co/4sY4kYv/Juso-Pets-Logo.png" 
                 alt="Logo" 
                 style="height: 100px;">
          </a>
	</div>
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>


<!------ Sidebar ---------->


<!------ Include the above in your HEAD tag ---------->

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet"/>
</head>
<body>
  <?php
                $rol = Auth::user()->rol;
                
                if ($rol == 1): 
                ?>
    <div class="container-fluid">
      <div class="row">    
          <div id="admin-sidebar" class="col-md-2 p-x-0 p-y-3">
              <ul class="sidenav admin-sidenav list-unstyled">
                  <li><a href="{{route('mascotas.index')}}">mascotas</a></li>
                  <li><a href="{{route('citas.index')}}">Citas</a></li>
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">NavLink 4</a></li>
                  <li><a href="#">NavLink 5</a></li>
                  <li><a href="#">NavLink 6</a></li>                  
              </ul>
          </div> <!-- /#admin-sidebar -->
          <div id="admin-main-control" class="col-md-10 p-x-3 p-y-1">
              <div class="content-title m-x-auto">
                  <i class="fa fa-dashboard"></i> Dashboard
              </div>
              @yield('content')
              
          </div> <!-- /#admin-main-control -->
      </div> <!-- /.row -->
  </div> <!-- /.container-fluid -->
                <?php
                elseif($rol == 2): 
                ?>
    <div class="container-fluid">
      <div class="row">    
          <div id="admin-sidebar" class="col-md-2 p-x-0 p-y-3">
              <ul class="sidenav admin-sidenav list-unstyled">
                  <li><a href="{{route('mascotas.index')}}">mascotas</a></li>
                  <li><a href="{{route('citas.index')}}">Citas</a></li>
                  <li><a href="#">Vet</a></li>
                  <li><a href="#">NavLink 4</a></li>
                  <li><a href="#">NavLink 5</a></li>
                  <li><a href="#">NavLink 6</a></li>                  
              </ul>
          </div> <!-- /#admin-sidebar -->
          <div id="admin-main-control" class="col-md-10 p-x-3 p-y-1">
              <div class="content-title m-x-auto">
                  <i class="fa fa-dashboard"></i> Dashboard
              </div>
              @yield('content')
              
          </div> <!-- /#admin-main-control -->
      </div> <!-- /.row -->
  </div> <!-- /.container-fluid -->
  <?php
                else:
                ?>
    <div class="container-fluid">
      <div class="row">    
          <div id="admin-sidebar" class="col-md-2 p-x-0 p-y-3">
              <ul class="sidenav admin-sidenav list-unstyled">
                  <li><a href="{{route('mascotas.index')}}">mascotas</a></li>
                  <li><a href="{{route('citas.index')}}">Citas</a></li>
                  <li><a href="#">Usuario</a></li>
                  <li><a href="#">NavLink 4</a></li>
                  <li><a href="#">NavLink 5</a></li>
                  <li><a href="#">NavLink 6</a></li>                  
              </ul>
          </div> <!-- /#admin-sidebar -->
          <div id="admin-main-control" class="col-md-10 p-x-3 p-y-1">
              <div class="content-title m-x-auto">
                  <i class="fa fa-dashboard"></i> Dashboard
              </div>
              @yield('content')
              
          </div> <!-- /#admin-main-control -->
      </div> <!-- /.row -->
  </div> <!-- /.container-fluid -->
                <?php
                endif;
                ?>
    <!--<div class="container-fluid">
        <div class="row">    
            <div id="admin-sidebar" class="col-md-2 p-x-0 p-y-3">
                <ul class="sidenav admin-sidenav list-unstyled">
                    <li><a href="{{route('mascotas.index')}}">mascotas</a></li>
                    <li><a href="#">NavLink 2</a></li>
                    <li><a href="#">NavLink 3</a></li>
                    <li><a href="#">NavLink 4</a></li>
                    <li><a href="#">NavLink 5</a></li>
                    <li><a href="#">NavLink 6</a></li>                  
                </ul>
            </div>  /#admin-sidebar 
            <div id="admin-main-control" class="col-md-10 p-x-3 p-y-1">
                <div class="content-title m-x-auto">
                    <i class="fa fa-dashboard"></i> Dashboard
                </div>
                @yield('content')
                
            </div>  /#admin-main-control -->
        </div> <!-- /.row -->
    </div> <!-- /.container-fluid -->
</body>

<!------ Sidebar ---------->
       
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>