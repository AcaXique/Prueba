<?php 
include 'conexion.php';
$c = new Conectar();
$con = $c -> conectarDB();

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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
      
    <script>
          $(document).ready(function() {
            $('#example').dataTable( {   "searching": false }, );
        } );
    </script>




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
      <h2>Registrar</h2>
      <form action = "funciones.php" method="POST" class="card p-2">  
      <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Apellido Paterno</label>
            <input type="text" class="form-control" id="laName" name = "paterno" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Apellido Materno </label>
            <input type="text" class="form-control" id="" name= "materno" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Sexo</label>
            <select class="custom-select d-block w-100" id="state" name="sexo" required>
              <option value="femenino">Femenino</option>
              <option value="masculino">Masculino</option>
            </select>

            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>
        <div class= "row">
         <div class="col-md-6 mb-3">
        <button class="btn btn-primary " type="submit">Guardar</button>
          </div>
        </div>
    </form>
      </div>
      <div class="jumbotron mt-3">
      <h2>CRUD</h2>
      <?php 
      $query = "SELECT * FROM usuarios WHERE estatus = 1 ";
      $result = mysqli_query($con,$query);
      ?>
        <div class="table-responsive table-hover ">
          <table id="example" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Apellido Paterno</th>
                      <th scope="col">Apellido Materno</th>
                      <th scope="col">Sexo</th> 
                      <th scope="col"></th> 
                      <th scope="col"></th>                    
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                     while ($fila= mysqli_fetch_assoc($result)){
                       $i=0;?>
                        <tr>
                      <th scope="row"><?php echo $id[$i]= $fila['idUsuario'];?></th>
                      <td><?php echo $nombre[$i]= $fila['nombre'];?></td>
                      <td><?php echo $paterno[$i]= $fila['apellidoPaterno'];?></td>
                      <td><?php echo $paterno[$i]= $fila['apellidoMaterno'];?></td>
                      <td><?php echo $paterno[$i]= $fila['sexo'];?></td>
                      <td><a href="editarRegistro.php?id=<?php echo $id[$i];?>">Editar</a></td>
                      <td><a href="funciones.php?id=<?php echo $id[$i];?>">Eliminar</a></td>                 
                    </tr>


                     <?php 
                     $i++;
                     }
                  ?>
                  </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
