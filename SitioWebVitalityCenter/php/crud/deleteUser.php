<?php

include('../DBconnect.php');

$idUser = $_GET['id'];

$sql = "DELETE FROM usuarios where idUsuario = '$idUser';";
$query = mysqli_query($conection,$sql);

if ($query){
    echo"        
    <script>
    alert('Usuario Eliminado con exito');
    window.history.go(-1);
    </script>";
    exit;
}

?>