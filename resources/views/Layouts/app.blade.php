<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
	integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" 
	integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
  
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Celulares | Diplomado</a>
        
           <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
              </li>
            <li class="nav-item">
                    <a class="nav-link" href="{{route('movimiento.index')}}">Movimientos</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Gestión
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{route('asesor.index')}}">Asesores</a>  
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{route('local.index')}}">Locales</a>
                  <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="{{route('producto.index')}}">Productos</a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="{{route('dispositivo.index')}}">Dispositivos</a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="{{route('proveedor.index')}}">Proveedores</a>
                  <div class="dropdown-divider"></div>
                 
                </div>
              </li>
    
          </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div style="background-color:#333; color:#9d9d9d; margin-top:5px">
            <h1 class="nav navbar-nav">@yield('title2')</h1>
        </div>
   

        @yield('content')
        
    </div>
    
    
</body>
</html>



