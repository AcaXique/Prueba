<?php
include 'conexion.php';

function actualizarRegistro($idR,$nombre,$paterno,$materno,$sexo){
    $c = new Conectar();
    $con = $c -> conectarDB();
    $query = "UPDATE usuarios  SET nombre='$nombre', apellidoPaterno='$paterno', apellidoMaterno='$materno', sexo='$sexo' WHERE idUsuario = '$idR'";
    $result = mysqli_query($con, $query);
    header("Location: Ejercicio3.php");

}



if (isset($_GET['idR']) && isset($_POST['nombre']) && isset($_POST['paterno']) && isset($_POST['materno']) && isset($_POST['sexo'])) {
    $idR = $_GET['idR'];
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $sexo = $_POST['sexo'];
    actualizarRegistro($idR,$nombre,$paterno,$materno,$sexo);
}

?>