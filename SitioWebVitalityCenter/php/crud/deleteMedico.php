<?php

include('../DBconnect.php');

$idMed = $_GET['id'];

$sql = "DELETE FROM medicos where idMedico = '$idMed';";
$query = mysqli_query($conection,$sql);

if ($query){
    echo"        
    <script>
    alert('Medico Eliminado con exito');
    window.history.go(-1);
    </script>";
    exit;
}

?>