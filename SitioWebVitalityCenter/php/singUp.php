<?php
include ('../php/DBconnect.php');
echo "<br><br>";


$nombreUsuario = $_POST['nameUser'];
$passwordUsuario = $_POST['passwordUser'];
$estadoUsuario = $_POST['estadoUser'];
$rolUser = $_POST['rolUser'];


echo"los datos son: $nombreUsuario,
$passwordUsuario,
$estadoUsuario,
$rolUser";

//CONSULTA PARA INSERTAR UN USUARIO
$insertarUsuario = "INSERT INTO usuarios(usuLogin,usuPassword,usuEstado,usuRol) VALUES('$nombreUsuario','$passwordUsuario','$estadoUsuario','$rolUser');";

//EJECUTAR CONSULTA
$resultadoUsuario = mysqli_query($conection, $insertarUsuario);

//Validacion del resultado del registro del usuario
if (!$resultadoUsuario) {
    echo"        
    <script>
    alert('error al registrar Usuario');
    window.history.go(-1);
    </script>";
    exit;
}else{
    echo"        
    <script>
    alert('Usuario registrado con exito');
    window.history.go(-1);
    </script>";
    exit;
}

mysqli_close($conection);







?>