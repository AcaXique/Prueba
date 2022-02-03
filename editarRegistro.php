<?php 
include 'conexion.php';
$c = new Conectar();
$con = $c -> conectarDB();
$idR = $_GET['id'];
$query ="SELECT * FROM usuarios WHERE idUsuario='$idR'";
$result = mysqli_query($con, $query);
$fila = mysqli_fetch_assoc($result);

?>
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
      <h2>Actualizar Registro</h2>
      <form action = "actualizar.php?idR=<?php echo $idR?>" method="POST" class="card p-2">  
      <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="" placeholder="" value="<?php echo $fila['nombre'];?>" >
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Apellido Paterno</label>
            <input type="text" class="form-control" id="laName" name = "paterno" placeholder="" value="<?php echo $fila['apellidoPaterno'];?>" >
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Apellido Materno </label>
            <input type="text" class="form-control" id="" name= "materno" placeholder="" value="<?php echo $fila['apellidoMaterno'];?>" >
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Sexo</label>
            <select class="custom-select d-block w-100" id="state" name="sexo" >
              <option value="femenino" <?php if ($fila['sexo'] == "femenino") echo "selected='selected'"?>>Femenino</option>
              <option value="masculino" <?php if ($fila['sexo'] == "masculino") echo "selected='selected'"?>>Masculino</option>
            </select>

            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>
        <div class= "row">
         <div class="col-md-6 mb-3">
        <button class="btn btn-primary " type="submit">Actualizar</button>
          </div>
        </div>
    </form>
      </div>
              
    </div>
  </body>
</html>
