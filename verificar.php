<?php 

 function palindromo($palabra){    
    $palabra = str_replace(" ","",$palabra);
    $palabra = strtolower($palabra);
    $palabraInvertida = strrev($palabra);
    $comparacion =  strcmp($palabra,$palabraInvertida);
    if ($comparacion == 0){
        echo '<script> alert("Es palindromo");
        window.location.href="ejercicio2.php";
         </script>';
    }
    else{
        echo '<script> alert("No es palindromo");
        window.location.href="ejercicio2.php";
         </script>';
    }
 } 

if (isset($_POST['palabra'])) {
    $palabra = $_POST['palabra'];
    palindromo($palabra);
}

?>