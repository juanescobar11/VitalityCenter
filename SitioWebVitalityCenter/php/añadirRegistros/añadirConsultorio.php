<?php

include ("../DBconnect.php");
echo"<br> <br> <br>";


 //Pruebas de recolección de datos con el metodo POST. -- Todo correcto.--
//TABLA PACIENTES:

$idCon = $_POST['idCon'];
$nombreCon = $_POST['nombreCon'];




//CONSULTA PARA INSERTAR PACIENTE
$insertarConsultorio = "INSERT INTO consultorios(idConsultorio, conNombre)
VALUES ('$idCon','$nombreCon');";

//EjecutarConsulta
$resultadoConsultorio = mysqli_query($conection, $insertarConsultorio);




//Validacion del resultado del registro del usuario
if (!$resultadoConsultorio) {
    echo"        
    <script>
    alert('error al registrar el consultorio');
    window.history.go(-1);
    </script>";
    exit;
}else{
    echo"        
    <script>
    alert('Consultorio registrado con exito');
    window.history.go(-1);
    </script>";
    exit;
}

//Cerrar conexión
mysqli_close($conection);
