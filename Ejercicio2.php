<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Prueba</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/offcanvas/">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">


    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="estilo.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link" href="index.php">Ejercicio 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Ejercicio2.php">Ejercicio 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Ejercicio3.php">Ejercicio 3</a>
            </li>       
            </ul>
         
        </div>
    </nav>
    <div class="container">
      <div class="jumbotron mt-3">      
            <form action = "verificar.php" method ="POST" class="form-signin">
                <h1 class="h3 mb-3 font-weight-normal">Palíndromo</h1>               
                <input type="text" name= "palabra" class="form-control" placeholder="Ingrese la palabra o frase" required autofocus><br>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Verificar si es palíndromo</button> 
                
            </form>
      </div>
    </div>
  </body>
</html>
