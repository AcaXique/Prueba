<?php 

include 'conexion.php';
function insertarRegistro($nombre,$paterno,$materno,$sexo){
    $c = new Conectar();
    $con = $c -> conectarDB();
    $query = "INSERT INTO usuarios(nombre,apellidoPaterno,apellidoMaterno,sexo,estatus) VALUES ('$nombre','$paterno','$materno','$sexo',1)";
    $result = mysqli_query($con, $query);
    header("Location: Ejercicio3.php");
}




function eliminarRegistro($idRegistro){
    $c = new Conectar();
    $con = $c -> conectarDB();
    $query = "UPDATE usuarios  SET estatus = 0  WHERE idUsuario = '$idRegistro'";
    $result = mysqli_query($con, $query);
    header("Location: Ejercicio3.php");

}

if (isset($_POST['nombre']) && isset($_POST['paterno']) && isset($_POST['materno']) && isset($_POST['sexo'])) {
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $sexo = $_POST['sexo'];
    insertarRegistro($nombre,$paterno,$materno,$sexo);
}



if(isset($_GET['id'])){
    $idRegistro = $_GET['id'];
    eliminarRegistro($idRegistro);

}


?>