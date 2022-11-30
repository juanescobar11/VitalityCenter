<?php

include ("DBconnect.php");
echo"<br> <br> <br>";


 //Pruebas de recolección de datos con el metodo POST. -- Todo correcto.--
//TABLA PACIENTES:

$idPaciente = $_POST['idPaciente'];
$identificacionPaciente = $_POST['identificacionPaciente'];
$nombrePaciente = $_POST['nombrePaciente'];
$apellidoPaciente = $_POST['apellidoPaciente'];
$nacimiento = $_POST['fecha'];
$sexoPac = $_POST['sexoPac'];

echo "Los datos de la tabla Pacientes son: 
$idPaciente,
$identificacionPaciente,
$nacimiento,
$nombrePaciente,
$apellidoPaciente,
$sexoPac <br><br>";


//CONSULTA PARA INSERTAR PACIENTE
$insertarPaciente = "INSERT INTO pacientes(pacIdentificacion,pacNombres,pacApellidos,pacFechaNacimiento,pacSexo) VALUES('$identificacionPaciente','$nombrePaciente','$apellidoPaciente','$nacimiento','$sexoPac')";

//EjecutarConsulta
$resultadoPaciente = mysqli_query($conection, $insertarPaciente);




//Validacion del resultado del registro del paciente
if (!$resultadoPaciente) {
    echo"
        <script>
        alert('error al registrar paciente');
        </script>
    ";
}else{
    echo "
    <script>
    alert('paciente registrado exitosamente.');
    window.history.go(-1);
    </script>
    ";
    exit;
}
//Cerrar conexión
mysqli_close($conection);



/*
//tabla usuarios

$idusuario = $_POST['idusuario']; 
$usuario = $_POST['usuario'];
$contraseña =  $_POST['contraseña'];
$estadoUsu = $_POST['estadoUsu'];
$Rol = $_POST['Rol'];

echo"<br>Los datos de la Tabla usuarios son:
$idusuario,
$usuario,
$contraseña,
$estadoUsu,
$Rol";

//CONSULTA PARA INSERTAR UN USUARIO
$insertarUsuario = "INSERT INTO usuarios(usuLogin,usuPassword,usuEstado,usuRol) VALUES('$usuario','$contraseña','$estadoUsu','$Rol');";

//EJECUTAR CONSULTA
$resultadoUsuario = mysqli_query($conection, $insertarUsuario);

//Validacion del resultado del registro del usuario
if (!$resultadoUsuario) {
    echo"<br><br> Error al registrar al Usuario";
}else{
    echo"<br>Usuario registrado con exitosamente.";
}

//Cierre de conexion con la base de datos

mysqli_close($conection);


//tabla roles:

$idRol = $_POST['idRol'];
$nombreRol = $_POST['nombreRol'];

echo"<br>Los datos de la tabla Roles son:
$idRol,
$nombreRol";

//CONSULTA PARA INSERTAR DATOS EN TABLA ROLES



//tabla medicos:

$idMed = $_POST['idMed'];
$identificacionMed = $_POST['identificacionMed'];
$nombresMed = $_POST['nombresMed'];
$apellidosMed = $_POST['apellidosMed'];
$especialidadMed = $_POST['especialidadMed'];
$telefonoMed = $_POST['telefonoMed'];
$emailMed = $_POST['emailMed'];

echo "<br>Los datos de la tabla Medicos son:
$idMed,
$identificacionMed,
$nombresMed,
$apellidosMed,
$especialidadMed,
$telefonoMed,
$emailMed";

//CONSULTA INSERTAR MEDICO
$insertarMedico = "INSERT INTO medicos(idMedico,medIdentificacion,medNombres,medApellidos,medEspecialidad,medTelefono,medCorreo)
VALUES ('$idMed','$identificacionMed','$nombresMed','$apellidosMed','$especialidadMed','$telefonoMed','$emailMed');";

//EJECUTAR CONSULTA
$resultadoMedico = mysqli_query($conection,$insertarMedico);

//Validación de consulta
if (!$resultadoMedico) {
    echo"<br> Error al registrar al medico. ";
}else{
    echo"<br> El medico ha sido registrado Exitosamente.";
}

mysqli_close($conection);

/*
//tabla consultorios

$idCon = $_POST['idCon'];
$nombreCon = $_POST['nombreCon'];

echo "<br>Los datos de la tabla Consultorios son:
$idCon,
$nombreCon";

//Tabla citas

$idCit = $_POST['idCit'];
$citFecha = $_POST['citFecha'];
$citHora = $_POST['citHora'];
$citPaciente = $_POST['citPaciente'];
$citMedico = $_POST['citMedico'];
$idConsul = $_POST['idConsul'];
$estadoCit = $_POST['estadoCit'];
$citObservaciones = $_POST['citObservaciones'];

echo "<br>Los datos de la tabla citas son:
$idCit,
$citFecha,
$citHora,
$citPaciente,
$citMedico,
$idConsul,
$estadoCit,
$citObservaciones <br>";

*/




?>