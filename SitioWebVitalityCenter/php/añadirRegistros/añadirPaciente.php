<?php

include ("../DBconnect.php");
echo"<br> <br> <br>";


 //Pruebas de recolección de datos con el metodo POST. -- Todo correcto.--
//TABLA PACIENTES:

$identificacionPaciente = $_POST['identificacionPaciente'];
$nombrePaciente = $_POST['nombrePaciente'];
$apellidoPaciente = $_POST['apellidoPaciente'];
$nacimiento = $_POST['fecha'];
$sexoPac = $_POST['sexoPac'];




//CONSULTA PARA INSERTAR PACIENTE
$insertarPaciente = "INSERT INTO pacientes(pacIdentificacion,pacNombres,pacApellidos,pacFechaNacimiento,pacSexo) VALUES('$identificacionPaciente','$nombrePaciente','$apellidoPaciente','$nacimiento','$sexoPac')";

//EjecutarConsulta
$resultadoPaciente = mysqli_query($conection, $insertarPaciente);




//Validacion del resultado del registro del usuario
if (!$resultadoPaciente) {
    echo"        
    <script>
    alert('error al registrar paciente');
    window.history.go(-1);
    </script>";
    exit;
}else{
    echo"        
    <script>
    alert('Paciente registrado con exito');
    window.history.go(-1);
    </script>";
    exit;
}

//Cerrar conexión
mysqli_close($conection);

