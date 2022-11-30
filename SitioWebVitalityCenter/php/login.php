<?php

use function PHPSTORM_META\map;

include('../php/DBconnect.php');
echo"<br><br>";


$loginUser = $_POST['loginUser'];
$passwordUser = $_POST['passwordUser'];


//Se utlizara elmetodo SessionStart() para comenzar a crear el inicio de sesión
session_start();
$_SESSION['loginUser'] = $loginUser;

//Consulta de la página a la BD, con el fin de preguntar si el usuario y contraseña ingresados ésta guardado en la BD
$consulta = "SELECT * FROM usuarios where usuLogin ='$loginUser' and usuPassword = '$passwordUser'";

//Validación de la consulta ($consulta) hacia la BD 
$resultado= mysqli_query($conection,$consulta);

//el metodo _num_rows sirve para alamcenar el resultado de la consulta y hacer la validación correspondiente
$filas = mysqli_num_rows($resultado);

//Validacion condicional

if($filas) {
    header('location:home.php');
}else{

    echo"        
    <script>
    alert('Usuario no registrado, por favor verifica tu Usuario y Contraseña');
    window.history.go(-1);
    </script>";
    exit;
}

mysqli_free_result($resultado);
mysqli_close($conection);

?>
