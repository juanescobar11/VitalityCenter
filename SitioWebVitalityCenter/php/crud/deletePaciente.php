<?php

include('../DBconnect.php');

$idPac = $_GET['id'];

$sql = "DELETE FROM pacientes where idPaciente = '$idPac';";
$query = mysqli_query($conection,$sql);

if ($query){
    echo"        
    <script>
    alert('Paciente Eliminado con exito');
    window.history.go(-1);
    </script>";
    exit;
}

?>