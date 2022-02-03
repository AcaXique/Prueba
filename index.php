
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Ejercicio 1. Leer XML</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/navbar-bottom/">
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
  <body>
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
        <h2>Leer XML  y obtener los  atributos </h2>       
          <?php          
           $comprobantexml= simplexml_load_file('comprobante.xml');     
           $nameSpace= $comprobantexml->getDocNamespaces(TRUE);
           $comprobantexml->registerXPathNamespace('cfdi', $nameSpace['cfdi']);
           $comprobantexml->registerXPathNamespace('tfd', $nameSpace['tfd']);
           $resultEmisor = $comprobantexml ->xpath('//cfdi:Comprobante//cfdi:Emisor');
           foreach($resultEmisor as $Emisor){
                echo "Nombre del emisor: ".$Emisor['Nombre'] . "<br>";
                echo "Rfc del emisor: ".$Emisor['Rfc'] . "<br>";
           }   
           
           $resultTFD = $comprobantexml -> xpath('//tfd:TimbreFiscalDigital');
           foreach($resultTFD as $Timbre){
                echo "UUID: ".$Timbre['UUID'] . "<br>";
                echo "Fecha de timbrado: ".$Timbre['FechaTimbrado'] . "<br>";
              }         
          ?>
        </p>
      </div>
    </div>
</html>
