<?php 
class Conectar{    
    function conectarDB(){
        $usuario = "root";
        $password = "";
        $servidor = "localhost";
        $basededatos = "crud";
        $conexion = mysqli_connect( $servidor, $usuario, $password, $basededatos ) or die("Ha sucedido un error inexperado en la conexion de la base de datos");
        return $conexion;
      }
}



?>