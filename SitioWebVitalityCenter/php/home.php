<?php

include('../php/DBconnect.php');

//Pacientes
$sql_pacientes = "SELECT * FROM pacientes;";
$query_pacientes = mysqli_query($conection, $sql_pacientes);

$row_pacientes = mysqli_fetch_array($query_pacientes);

//Usuarios
$sql_usuarios = "SELECT * FROM usuarios;";
$query_usuarios = mysqli_query($conection, $sql_usuarios);

$row_usuarios = mysqli_fetch_array($query_usuarios);

//Medicos
$sql_medicos = "SELECT * FROM medicos;";
$query_medicos = mysqli_query($conection, $sql_medicos);

$row_medicos = mysqli_fetch_array($query_medicos);

//Consultorio
$sql_consultorios = "SELECT * FROM consultorios;";
$query_consultorios = mysqli_query($conection, $sql_consultorios);

$row_consultorios = mysqli_fetch_array($query_consultorios);

//Citas
$sql_citas = "SELECT * FROM citas;";
$query_citas = mysqli_query($conection, $sql_citas);

$row_citas = mysqli_fetch_array($query_citas);

//Citas Asignadas
$sql_citasAsignadas = "SELECT * FROM citas";
$query_citasAsignadas = mysqli_query($conection, $sql_citasAsignadas);

$row_citasAsignadas = mysqli_fetch_array($query_citasAsignadas);

//Citas Atendidas
$sql_citasAtendidas = "SELECT * FROM  citas WHERE citEstado = 'Activa';";
$query_citasAtendidas = mysqli_query($conection, $sql_citasAtendidas);

$row_citasAtendidas = mysqli_fetch_array($query_citasAtendidas);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/blue_heartLogo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!--Link de iconos de boostrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!--Estilos CSS-->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/singUp.css">
    <!--Boostrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="icon" href="../img/blue_heartLogo.png">

    <title>Home</title>
</head>

<body class="bodyy">


    <!--=============================-->
    <!--ENCABEZADO-->
    <!--=============================-->

    <header class="container-Fluid d-flex justify-content-center">
        <div class="row">

            <!--Titulo de la pagina web-->

            <a href="../html/index.html">
                <h1 class="mb-0 p-2 fs-3 col-12">Vitality Center <img src="../img/blue_heartLogo.png" alt="blue_heartLogo" width="45px"></h1>
            </a>

            <!--Barra de navegación - Contenedor-->
            <nav class="navbar navbar-expand-lg col-12 p-0" id="menu">

                <!--Menu que contiene todos los enlaces de navegación -->
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                        <button class="btn btn-primary-outline-success btn-danger px-3 mx-5" type="button"><a href="../html/index.html" class="nav-link">Cerrar Sesión</a></button>
                    </form>

                    <!--Boton de menu desplegable que aparece cuando las pantallas se hacen más pequeñas.-->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                        <!--Icono del boton de desplazamiento-->
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!--===================================-->
                    <!--Items de la barra de navegación-->
                    <!--===================================-->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <!--Lista desordenada de la NavBar-->
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                            <li class="nav-item mx-3">
                                <a class="nav-link btn btn-secondary" data-bs-toggle="collapse" href="#section1" role="button" aria-expanded="false" aria-controls="collapseExample"><span class="text-light">Información Inicial</span> <i class="bi bi-info-circle-fill"></i></a>
                            </li>

                            <li class="nav-item mx-3">
                                <a class="nav-link " data-bs-toggle="collapse" href="#section2" role="button" aria-expanded="false" aria-controls="collapseExample">Sobre los datos <i class="bi bi-info-circle-fill"></i></a>
                            </li>

                            <!--Enlace con lista desplegable para añadir datos a la base de datos-->
                            <li class="nav-item dropdown mx-3">
                                <a class="nav-link dropdown-toggle text-success" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Registrar
                                </a>

                                <!--Elemetos de la lista desplegable - Registrar-->
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item " data-bs-toggle="collapse" href="#section3" role="button" aria-expanded="false" aria-controls="collapseExample">Paciente</a></li>
                                    <li><a class="dropdown-item" data-bs-toggle="collapse" href="#section4" role="button" aria-expanded="false" aria-controls="collapseExample">Usuario</a></li>

                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" data-bs-toggle="collapse" href="#section5" role="button" aria-expanded="false" aria-controls="collapseExample">Médico</a></li>
                                    <li><a class="dropdown-item" data-bs-toggle="collapse" href="#section6" role="button" aria-expanded="false" aria-controls="collapseExample">Consultorio</a></li>
                                    <li><a class="dropdown-item" data-bs-toggle="collapse" href="#section7" role="button" aria-expanded="false" aria-controls="collapseExample">Cita</a></li>
                                </ul>
                            </li>

                            <!--Enlace con lista desplegable para eliminar en la base de datos-->
                            <li class="nav-item dropdown mx-3">
                                <a class="nav-link dropdown-toggle text-danger" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <Span class="text-info">Consultar</Span> <span class="text-dark">y/o</span> <span class="text-danger">Eliminar</span>
                                </a>

                                <!--Elemetos de la lista desplegable eliminar-->
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item " data-bs-toggle="collapse" href="#section8" role="button" aria-expanded="false" aria-controls="collapseExample">Paciente</a></li>
                                    <li><a class="dropdown-item" data-bs-toggle="collapse" href="#section9" role="button" aria-expanded="false" aria-controls="collapseExample">Usuario</a></li>

                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" data-bs-toggle="collapse" href="#section10" role="button" aria-expanded="false" aria-controls="collapseExample">Médico</a></li>
                                    <li><a class="dropdown-item" data-bs-toggle="collapse" href="#section11" role="button" aria-expanded="false" aria-controls="collapseExample">Consultorio</a></li>
                                    <li><a class="dropdown-item" data-bs-toggle="collapse" href="#section12" role="button" aria-expanded="false" aria-controls="collapseExample">Citas</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" data-bs-toggle="collapse" href="#section13" role="button" aria-expanded="false" aria-controls="collapseExample">Citas Asignadas</a></li>
                                    <li><a class="dropdown-item" data-bs-toggle="collapse" href="#section14" role="button" aria-expanded="false" aria-controls="collapseExample">Citas Atendidas</a></li>
                                </ul>
                            </li>


                        </ul>

                        <!--Formulario de busqueda y filtrado en la página-->

                    </div>
                </div>
            </nav>
        </div>

    </header>

    <main class="main-home">



        <!--Contenido textual desplegable o colapsable-->
        <section class="w-50 mx-auto text-center pt-5 collapse  " id="section1">
            <h1 class="p-3 fs-2 border-top border-3">¿Cómo debes desplazarte dentro del apartado de <span class="text-primary">herramientas y funcionalidades? </span></h1>

            <p class="p-3 fs-4">
                1. Para acceder a las funcionalidades, da <span class="text-primary">click</span> sobre los botones para que se despliegue el apartado que estas buscando.<br>2. Repite siempre el proceso de <span class="text-primary">cerrar</span> las funcionalidades que has abierto <span class="text-primary">antes</span> de abrir una nueva. <br><br> -Para lograrlo solo debes dar click sobre el mismo botón con el que invocaste la función actual (esto permitirar que la funcionalidad que usabas se oculte nuevamente y no se sobreponga)-
            </p>
        </section>

        <!--Contenido textual desplegable o colapsable-->
        <section class="w-50 mx-auto text-center pt-5 collapse " id="section2">
            <h1 class="p-3 fs-2 border-top border-3"> Información acerca de la organización de los datos</h1>

            <p class="p-3 fs-4">1. En el apartado <span class="text-success">Registrar</span> sea cual sea la elección (Paciente, Usuario, Rol, Médico, Consultorio, Cita) se mostrara un formulario de llenado de información tras realizar la selección. <br>2. Para el caso de las funcionalidades de <span class="text-info">Consultar</span> y <span class="text-danger">Eliminar</span> podran verse apreciadas a ambas dentro de una misma tabla con los datos correspondientes a los registros existentes en las tablas, independiente de cual sea la tabla quesequiereescogida (Paciente, Usuario, Médico, Consultorio, Cita).</p>
            <i></i>
        </section>


        <!--=============================-->
        <!--FORMULARIOS DE REGISTRO-->
        <!--=============================-->


        <!--Formulario para registrar un PACIENTE-->
        <section class="w-50 mx-auto text-center pt-5  collapse " id="section3">
            <h3 class="p-3 fs-2 border-top border-3">Registrar paciente</h3>

            <!--Form-->
            <form action="../php/añadirRegistros/añadirPaciente.php" class="form-group" method="POST">

                <ul>
                    <!--Inputs-->
                    <li>
                        <input type="number" name="identificacionPaciente" placeholder="Identificacion paciente" class="form-control">
                    </li>
                    <li><input type="text" name="nombrePaciente" placeholder="Nombre Paciente" class="form-control"></li>
                    <li><input type="text" name="apellidoPaciente" placeholder="Apellido Paciente" class="form-control"></li>
                    <li>
                        <label for="" class="text-primary">Fecha Nacimiento</label><br>
                        <input type="date" name="fecha" placeholder="día-mes-año" class="form-control">
                    </li>
                    <li>
                        <input list="Estado" class="form-control" name="sexoPac" placeholder="Genero: Hombre - Mujer">
                        <datalist id="Estado">
                            <option value="Hombre"></option>
                            <option value="Mujer"></option>
                    </li>
                </ul>
                <input type="submit" value="Guardar" class="btn btn-success">

            </form>
        </section>

        <!--Formulario para registrar un USUARIO-->
        <section class="w-50 mx-auto text-center pt-5 collapse  " id="section4">
            <h3 class="p-3 fs-2 border-top border-3">Registrar usuario</h3>

            <!--Form-->
            <form action="../php/añadirRegistros/añadirUsuario.php" class="form-group" method="POST">

                <ul>

                    <li><input type="text" name="nameUser" placeholder="User" class="form-control"></li>
                    <li><input type="password" name="passwordUser" placeholder="Contraseña" class="form-control"></li>
                    <li>

                        <input list="Estado" class="form-control" name="estadoUser" placeholder="Estado: Activo - Inactivo">
                        <datalist id="Estado">
                            <option value="Activo"></option>
                            <option value="Inactivo"></option>
                    </li>
                    <li>
                        <input list="Rol" class="form-control" placeholder="Rol" name="rolUser">
                        <datalist id="Rol">
                            <option value="Directivo">Solo para usuarios con permisos más altos
                            </option>
                            <option value="Psicolog@">Usuarios del área de Psicologia</option>
                            <option value="Psiquiatra">Usuarios del area de Psiquiatria</option>
                            <option value="Doctor">Usuarios de tipo Doctor</option>
                            <option value="Enfermeria">Usuarios de tipo Enfermer@</option>
                            <option value="Paciente">Usuario de tipo Paciente</option>
                    </li>
                </ul>
                <input type="submit" value="Guardar" class="btn btn-success">

            </form>
        </section>

        <!--Formulario para registrar un Médico-->
        <section class="w-50 mx-auto text-center pt-5   collapse" id="section5">
            <h3 class="p-3 fs-2 border-top border-3">Registrar Médico</h3>

            <!--Form-->
            <form action="../php/añadirRegistros/añadirMedico.php" class="form-group" method="POST">

                <ul>
                    <li><input type="text" placeholder="Identificación Medica" name="identificacionMed" class="form-control"></li>
                    <li><input type="text" placeholder="Nombres" name="nombresMed" class="form-control"></li>
                    <li><input type="text" placeholder="Apellidos" name="apellidosMed" class="form-control"></li>
                    <li><input type="text" placeholder="Especialidad" name="especialidadMed" class="form-control"></li>
                    <li><input type="tel" placeholder="Teléfono" name="telefonoMed" class="form-control"></li>
                    <li><input type="email" placeholder="Email" name="emailMed" class="form-control"></li>
                </ul>
                <input type="submit" value="Guardar" class="btn btn-success">

            </form>
        </section>

        <!--Formulario para registrar un CONSULTORIO-->
        <section class="w-50 mx-auto text-center pt-5 collapse  " id="section6">
            <h3 class="p-3 fs-2 border-top border-3">Registrar consultorio</h3>

            <!--Form-->
            <form action="../php/añadirRegistros/añadirConsultorio.php" class="form-group" method="POST">

                <ul>
                    <!--Inputs-->
                    <li><input type="number" placeholder="ID Consultorio" name="idCon" class="form-control"></li>
                    <li><input type="text" placeholder="Nombre Consultorio" name="nombreCon" class="form-control"></li>
                </ul>
                <input type="submit" value="Guardar" class="btn btn-success">

            </form>
        </section>

        <!--Formulario para registrar una CITA-->
        <section class="w-50 mx-auto text-center pt-5  collapse " id="section7">
            <h3 class="p-3 fs-2 border-top border-3">Registrar cita</h3>

            <!--Form-->
            <form action="../php/añadirRegistros/añadirCita.php" class="form-group" method="POST">

                <ul>
                    <!--Inputs-->
                    <li><input type="number" placeholder="ID Cita" name="idCit" class="form-control"></li>
                    <li><label for="fecha" class="text-primary ">Fecha Cita</label>
                        <br>
                        <input type="date" id="citFecha" name="citFecha" class="form-control">
                    </li>
                    <li><label for="hora" class="text-primary ">Hora Cita</label>
                        <br>
                        <input type="time" name="citHora" id="horaCit" class="form-control">
                    </li>
                    <li><input type="number" placeholder="ID Cita Paciente" name="citPaciente" class="form-control"></li>
                    <li><input type="number" placeholder="ID Medico asignado" name="citMedico" class="form-control"></li>
                    <li><input type="number" placeholder="ID Consultorio" name="idConsul" class="form-control"></li>
                    <li>
                        <input type="text" placeholder="Estadp: Activa - Inactiva" name="estadoCit" class="form-control">
                    </li>
                    <li><input type="text" placeholder="Observaciones" name="citObservaciones" class="form-control"></li>
                </ul>
                <input type="submit" value="Guardar" class="btn btn-success">

            </form>
        </section>


        <!--=============================-->
        <!--CRUDS DE CONSULTA Y EDICIÓN DE DATOS-->
        <!--=============================-->

        <!--Apartado de CRUD PACIENTES-->
        <div class="container mt-5 rounded bg-light w-75 shadow collapse" id="section8">
            <div class="row aling-items-stretch ">
                <!--FILA CRUD-->

                <!--contenedor del CRUD-->
                <div class="col  p-5 bg-light rounded">
                    <div class="text-end">
                        <img src="../img/blue_heartLogo.png" alt="blueHeartLogo" width="48px">
                        <!--LOGO-->
                    </div>
                    <h2 class="fw-bold text-center py-3 ">CRUD Usuarios</h2>

                    <!--TABLA-->
                    <table class="table">
                        <thead class=" table-success table-striped ">
                            <tr>
                                <th>ID Paciente</th>
                                <th>Paciente identificación</th>
                                <th>Paciente Nombre</th>
                                <th>Paciente Apellido</th>
                                <th>Fecha de nacimiento</th>
                                <th>Paciente sexo</th>
                                <th></th>
                                <!--Espacio para el boton Editar-->
                                <th></th>
                                <!--Espacio para el boton Eliminar-->
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            while ($row_pacientes = mysqli_fetch_array($query_pacientes)) {
                            ?>
                                <tr>
                                    <th><?php echo $row_pacientes['idPaciente'] ?></th>
                                    <th><?php echo $row_pacientes['pacIdentificacion'] ?></th>
                                    <th><?php echo $row_pacientes['pacNombres'] ?></th>
                                    <th><?php echo $row_pacientes['pacApellidos'] ?></th>
                                    <th><?php echo $row_pacientes['pacFechaNacimiento'] ?></th>
                                    <th><?php echo $row_pacientes['pacSexo'] ?></th>
                                    <!--TH BOTONES EDITAR Y ELIMINAR-->
                                    <th><a href="../php/crud/deletePaciente.php?id=<?php echo $row_pacientes['idPaciente'] ?>" class="btn btn-danger">Eliminar</a></th>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <!-- CIERRE CRUD-->

                </div>
                <!--CIERRE CRUD-->


            </div>
            <!--Cierre fila CRUD-->

        </div>
        <!--CIerre Container CRUD-->

        <!--Apartado de CRUD USUARIOS-->
        <div class="container mt-5 rounded bg-light w-75 shadow collapse " id="section9">
            <div class="row aling-items-stretch ">
                <!--FILA CRUD-->

                <!--contenedor del CRUD-->
                <div class="col  p-5 bg-light rounded">
                    <div class="text-end">
                        <img src="../img/blue_heartLogo.png" alt="blueHeartLogo" width="48px">
                        <!--LOGO-->
                    </div>
                    <h2 class="fw-bold text-center py-3 ">CRUD Usuarios</h2>

                    <!--TABLA-->
                    <table class="table ">
                        <thead class=" table-success table-striped ">
                            <tr>
                                <th>ID Usuario</th>
                                <th>Nombre Usuario</th>
                                <th>Contraseña Usuario</th>
                                <th>Estado Usuario</th>
                                <th>Rol Usuario</th>
                                <th></th>
                                <!--Espacio para el boton Editar-->
                                <th></th>
                                <!--Espacio para el boton Eliminar-->
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            while ($row_usuarios = mysqli_fetch_array($query_usuarios)) {
                            ?>
                                <tr>
                                    <th><?php echo $row_usuarios['idUsuario'] ?></th>
                                    <th><?php echo $row_usuarios['usuLogin'] ?></th>
                                    <th><?php echo $row_usuarios['usuPassword'] ?></th>
                                    <th><?php echo $row_usuarios['usuEstado'] ?></th>
                                    <th><?php echo $row_usuarios['usuRol'] ?></th>
                                    <!--TH BOTONES EDITAR Y ELIMINAR-->

                                    <th><a href="../php/crud/deleteUser.php?id=<?php echo $row_usuarios['idUsuario'] ?>" class="btn btn-danger">Eliminar</a></th>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <!-- CIERRE CRUD-->

                </div>
                <!--CIERRE CRUD-->


            </div>
            <!--Cierre fila CRUD-->

        </div>
        <!--CIerre Container CRUD-->

        <!--Apartado de CRUD MEDICOS-->
        <div class="container mt-5 rounded bg-light w-75 shadow collapse " id="section10">
            <div class="row aling-items-stretch ">
                <!--FILA CRUD-->

                <!--contenedor del CRUD-->
                <div class="col  p-5 bg-light rounded">
                    <div class="text-end">
                        <img src="../img/blue_heartLogo.png" alt="blueHeartLogo" width="48px">
                        <!--LOGO-->
                    </div>
                    <h2 class="fw-bold text-center py-3 ">CRUD Medicos</h2>

                    <!--TABLA-->
                    <table class="table ">
                        <thead class=" table-success table-striped ">
                            <tr>
                                <th>ID Médico</th>
                                <th>Médico identificación</th>
                                <th>Médico Nombres</th>
                                <th>Médico Apellidos</th>
                                <th>Médico Especialidad</th>
                                <th>Médico Telefono</th>
                                <th>Médico E-mail</th>
                                <th></th>
                                <!--Espacio para el boton Editar-->
                                <th></th>
                                <!--Espacio para el boton Eliminar-->
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            while ($row_medicos = mysqli_fetch_array($query_medicos)) {
                            ?>
                                <tr>
                                    <th><?php echo $row_medicos['idMedico'] ?></th>
                                    <th><?php echo $row_medicos['medIdentificacion'] ?></th>
                                    <th><?php echo $row_medicos['medNombres'] ?></th>
                                    <th><?php echo $row_medicos['medApellidos'] ?></th>
                                    <th><?php echo $row_medicos['medEspecialidad'] ?></th>
                                    <th><?php echo $row_medicos['medTelefono'] ?></th>
                                    <th><?php echo $row_medicos['medCorreo'] ?></th>
                                    <!--TH BOTONES EDITAR Y ELIMINAR-->

                                    <th><a href="../php/crud/deleteMedico.php?id=<?php echo $row_medicos['idMedico'] ?>" class="btn btn-danger">Eliminar</a></th>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <!-- CIERRE CRUD-->

                </div>
                <!--CIERRE CRUD-->


            </div>
            <!--Cierre fila CRUD-->

        </div>
        <!--CIerre Container CRUD-->

        <!--Apartado de CRUD CONSULTORIOS-->
        <div class="container mt-5 rounded bg-light w-75 shadow  collapse" id="section11">
            <div class="row aling-items-stretch ">
                <!--FILA CRUD-->

                <!--contenedor del CRUD-->
                <div class="col  p-5 bg-light rounded">
                    <div class="text-end">
                        <img src="../img/blue_heartLogo.png" alt="blueHeartLogo" width="48px">
                        <!--LOGO-->
                    </div>
                    <h2 class="fw-bold text-center py-3 ">CRUD Consultorios</h2>

                    <!--TABLA-->
                    <table class="table ">
                        <thead class=" table-success table-striped ">
                            <tr>
                                <th>ID Consultorio</th>
                                <th>Consultorio Nombre</th>
                                <th></th>
                                <!--Espacio para el boton Editar-->
                                <th></th>
                                <!--Espacio para el boton Eliminar-->
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            while ($row_consultorios = mysqli_fetch_array($query_consultorios)) {
                            ?>
                                <tr>
                                    <th><?php echo $row_consultorios['idConsultorio'] ?></th>
                                    <th><?php echo $row_consultorios['conNombre'] ?></th>
                                    <!--TH BOTONES EDITAR Y ELIMINAR-->


                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <!-- CIERRE CRUD-->

                </div>
                <!--CIERRE CRUD-->


            </div>
            <!--Cierre fila CRUD-->

        </div>
        <!--CIerre Container CRUD-->

        <!--Apartado de CRUD CITAS-->
        <div class="container mt-5 rounded bg-light w-75 shadow collapse" id="section12">
            <div class="row aling-items-stretch ">
                <!--FILA CRUD-->

                <!--contenedor del CRUD-->
                <div class="col  p-5 bg-light rounded">
                    <div class="text-end">
                        <img src="../img/blue_heartLogo.png" alt="blueHeartLogo" width="48px">
                        <!--LOGO-->
                    </div>
                    <h2 class="fw-bold text-center py-3 ">CRUD Citas</h2>

                    <!--TABLA-->
                    <table class="table ">
                        <thead class=" table-success table-striped ">
                            <tr>
                                <th>ID Cita</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Paciente</th>
                                <th>Médico</th>
                                <th>Consultorio</th>
                                <th>Estado</th>
                                <th>Observaciones</th>
                                <th></th>
                                <!--Espacio para el boton Editar-->
                                <th></th>
                                <!--Espacio para el boton Eliminar-->
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            while ($row_citas = mysqli_fetch_array($query_citas)) {
                            ?>
                                <tr>
                                    <th><?php echo $row_citas['idCita'] ?></th>
                                    <th><?php echo $row_citas['citFecha'] ?></th>
                                    <th><?php echo $row_citas['citHora'] ?></th>
                                    <th><?php echo $row_citas['citPaciente'] ?></th>
                                    <th><?php echo $row_citas['citMedico'] ?></th>
                                    <th><?php echo $row_citas['citConsultorio'] ?></th>
                                    <th><?php echo $row_citas['citEstado'] ?></th>
                                    <th><?php echo $row_citas['citObservaciones'] ?></th>
                                    <!--TH BOTONES EDITAR Y ELIMINAR-->


                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <!-- CIERRE CRUD-->

                </div>
                <!--CIERRE CRUD-->


            </div>
            <!--Cierre fila CRUD-->

        </div>
        <!--CIerre Container CRUD-->

        <!--Apartado de CRUD CITAS ASIGNADAS-->
        <div class="container mt-5 rounded bg-light w-75 shadow collapse" id="section13">
            <div class="row aling-items-stretch ">
                <!--FILA CRUD-->

                <!--contenedor del CRUD-->
                <div class="col  p-5 bg-light rounded">
                    <div class="text-end">
                        <img src="../img/blue_heartLogo.png" alt="blueHeartLogo" width="48px">
                        <!--LOGO-->
                    </div>
                    <h2 class="fw-bold text-center py-3 ">Citas Asignadas</h2>

                    <!--TABLA-->
                    <table class="table ">
                        <thead class=" table-success table-striped ">
                            <tr>
                                <th>ID Cita</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Paciente</th>
                                <th>Médico</th>
                                <th>Consultorio</th>
                                <th>Estado</th>
                                <th>Observaciones</th>
                                <th></th>
                                <!--Espacio para el boton Editar-->
                                <th></th>
                                <!--Espacio para el boton Eliminar-->
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            while ($row_citasAsignadas = mysqli_fetch_array($query_citasAsignadas)) {
                            ?>
                                <tr>
                                    <th><?php echo $row_citasAsignadas['idCita'] ?></th>
                                    <th><?php echo $row_citasAsignadas['citFecha'] ?></th>
                                    <th><?php echo $row_citasAsignadas['citHora'] ?></th>
                                    <th><?php echo $row_citasAsignadas['citPaciente'] ?></th>
                                    <th><?php echo $row_citasAsignadas['citMedico'] ?></th>
                                    <th><?php echo $row_citasAsignadas['citConsultorio'] ?></th>
                                    <th><?php echo $row_citasAsignadas['citEstado'] ?></th>
                                    <th><?php echo $row_citasAsignadas['citObservaciones'] ?></th>
                                    <!--TH BOTONES EDITAR Y ELIMINAR-->


                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <!-- CIERRE CRUD-->

                </div>
                <!--CIERRE CRUD-->


            </div>
            <!--Cierre fila CRUD-->

        </div>
        <!--CIerre Container CRUD-->

        <!--Apartado de CRUD CITAS ATENDIDAS-->
        <div class="container mt-5 rounded bg-light w-75 shadow collapse" id="section14">
            <div class="row aling-items-stretch ">
                <!--FILA CRUD-->

                <!--contenedor del CRUD-->
                <div class="col  p-5 bg-light rounded">
                    <div class="text-end">
                        <img src="../img/blue_heartLogo.png" alt="blueHeartLogo" width="48px">
                        <!--LOGO-->
                    </div>
                    <h2 class="fw-bold text-center py-3 ">Citas Atendidas</h2>

                    <!--TABLA-->
                    <table class="table ">
                        <thead class=" table-success table-striped ">
                            <tr>
                                <th>ID Cita</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Paciente</th>
                                <th>Médico</th>
                                <th>Consultorio</th>
                                <th>Estado</th>
                                <th>Observaciones</th>
                                <th></th>
                                <!--Espacio para el boton Editar-->
                                <th></th>
                                <!--Espacio para el boton Eliminar-->
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            while ($row_citasAtendidas = mysqli_fetch_array($query_citasAtendidas)) {
                            ?>
                                <tr>
                                    <th><?php echo $row_citasAtendidas['idCita'] ?></th>
                                    <th><?php echo $row_citasAtendidas['citFecha'] ?></th>
                                    <th><?php echo $row_citasAtendidas['citHora'] ?></th>
                                    <th><?php echo $row_citasAtendidas['citPaciente'] ?></th>
                                    <th><?php echo $row_citasAtendidas['citMedico'] ?></th>
                                    <th><?php echo $row_citasAtendidas['citConsultorio'] ?></th>
                                    <th><?php echo $row_citasAtendidas['citEstado'] ?></th>
                                    <th><?php echo $row_citasAtendidas['citObservaciones'] ?></th>
                                    <!--TH BOTONES EDITAR Y ELIMINAR-->


                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <!-- CIERRE CRUD-->

                </div>
                <!--CIERRE CRUD-->


            </div>
            <!--Cierre fila CRUD-->

        </div>
        <!--CIerre Container CRUD-->

    </main>





    <!--=============================-->
    <!--IMAGEN DE FONDO DE LA SECCIÓN DE ATENCIÓN ||FORMULARIO-BG-->
    <!--=============================-->

    <section id="seccion-contacto" class="border-bottom border-secundary border-2 mt-3">
        <!--Sección en donde se ubica una imagen de ondas de fondo-->
        <div class="" id="bg-contacto">
            <!--Imagen de ondas de fondo | imagen vectorial-->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#0099ff" fill-opacity="1" d="M0,192L34.3,165.3C68.6,139,137,85,206,85.3C274.3,85,343,139,411,160C480,181,549,171,617,138.7C685.7,107,754,53,823,74.7C891.4,96,960,192,1029,213.3C1097.1,235,1166,181,1234,176C1302.9,171,1371,213,1406,234.7L1440,256L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
            </svg>
        </div>
    </section>

    <!--=============================-->
    <!--PIE DE PÁGINA-->
    <!--============================-->

    <footer class="w-100 d-flex align-items-center justify-content-center flex-wrap ">

        <!--Texto del footer-->
        <p class="fs-5 px-3 pt-3"> VitalityCenter &copy; todos los derechos reservados 2022</p>

        <!--Iconos con enlaces-->
        <div class="" id="iconos">
            <a href="" class="bi bi-facebook"></a>
            <a href="" class="bi bi-twitter"></a>
            <a href="" class="bi bi-instagram"></a>
        </div>
    </footer>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>