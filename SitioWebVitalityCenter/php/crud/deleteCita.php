<?php

include('../DBconnect.php');

$idcit = $_GET['id'];

$sql = "DELETE FROM citas where idCitas = '$idcit';";
$query = mysqli_query($conection,$sql);

if ($query){
    echo"        
    <script>
    alert('Cita Eliminada con exito');
    window.history.go(-1);
    </script>";
    exit;
}

?>