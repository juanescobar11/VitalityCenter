<?php
include ('../DBconnect.php');
echo "<br><br>";

//Tabla  usuario

$idCit = $_POST['idCit'];
$citFecha = $_POST['citFecha'];
$citHora = $_POST['citHora'];
$citPaciente = $_POST['citPaciente'];
$citMedico = $_POST['citMedico'];
$idConsul = $_POST['idConsul'];
$estadoCit = $_POST['estadoCit'];
$citObservaciones = $_POST['citObservaciones'];


//CONSULTA INSERTAR MEDICO
$insertarCita = "INSERT INTO citas(idCita, citFecha, citHora, citPaciente, citMedico, citConsultorio,citEstado, citObservaciones)
VALUES ('$idCit','$citFecha','$citHora','$citPaciente','$citMedico','$idConsul','$estadoCit','$citObservaciones');";

//EJECUTAR CONSULTA
$resultadoCita = mysqli_query($conection,$insertarCita);


//Validacion del resultado del registro del usuario
if (!$resultadoCita) {
    echo"        
    <script>
    alert('error al registrar la Cita');
    window.history.go(-1);
    </script>";
    exit;
}else{
    echo"        
    <script>
    alert('Cita registrada con exito');
    window.history.go(-1);
    </script>";
    exit;
}

mysqli_close($conection);
