<?php
include ('../DBconnect.php');
echo "<br><br>";



//tabla medicos:

$idMed = $_POST['idMed'];
$identificacionMed = $_POST['identificacionMed'];
$nombresMed = $_POST['nombresMed'];
$apellidosMed = $_POST['apellidosMed'];
$especialidadMed = $_POST['especialidadMed'];
$telefonoMed = $_POST['telefonoMed'];
$emailMed = $_POST['emailMed'];



//CONSULTA INSERTAR MEDICO
$insertarMedico = "INSERT INTO medicos(medIdentificacion,medNombres,medApellidos,medEspecialidad,medTelefono,medCorreo)
VALUES ('$identificacionMed','$nombresMed','$apellidosMed','$especialidadMed','$telefonoMed','$emailMed');";

//EJECUTAR CONSULTA
$resultadoMedico = mysqli_query($conection,$insertarMedico);

//Validación de consulta
if (!$resultadoMedico) {
    echo"        
    <script>
    alert('error al registrar medico');
    window.history.go(-1);
    </script>";
    exit;
}else{
    echo"        
    <script>
    alert('Medico registrado con exito');
    window.history.go(-1);
    </script>";
    exit;
}

//Cerrar conexión
mysqli_close($conection);