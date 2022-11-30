<?php

use function PHPSTORM_META\map;

include('../DBconnect.php');


$idUsuario=$_POST['idUsuario'];
$usuLogin = $_POST['usuLogin'];
$usuPassword =$_POST['usuPassword'];
$usuEstado = $_POST['usuEstado'];
$usuRol = $_POST['usuRol'];

$sql = "UPDATE usuarios SET usuLogin ='$usuLogin',usuPassword = '$usuPassword', usuEstado = '$usuEstado', usuRol ='$usuRol' WHERE idUsuario='$idUsuario' ";

$query = mysqli_query($conection,$sql);

if($query){
    echo"        
    <script>
    alert('Usuario ha sido Editado con exito');
    window.history.go(-2);
    </script>";
    exit;
}


?>