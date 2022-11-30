<?php

include('../php/DBconnect.php');

$sql= "SELECT * FROM usuarios;";
$query = mysqli_query($conection,$sql);

$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
        <!--Link de iconos de boostrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!--Estilo CSS-->
    <link rel="stylesheet" href="../css/index.css">
    <!--LOGO Pagina-->
    <link rel="icon" href="../img/blue_heartLogo.png">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Login</title>
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

          <a class="navbar-brand" href="#">
          <span class="text-primary fs-5 fw-bold">Vitality</span>
          </a>

          <!--Boton de menu desplegable que aparece cuando las pantallas se hacen más pequeñas.-->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <!--Icono del boton de desplazamiento-->
            <span class="navbar-toggler-icon"></span>
          </button>

          <!--Items de la barra de navegación-->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!--Lista desordenada de la NavBar-->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../html/index.html">Home</a>
              </li>

            </ul>
            
            <!--Formulario de busqueda y filtrado en la página-->
            <form class="d-flex" role="search">
        
              <button class="btn btn-primary-outline-success btn-primary"  type="button"><a href="../html/singUpUsuario.html" class="nav-link">Registrate</a></button>
            </form>
          </div>
        </div>
      </nav>
    </div>

  </header>


    <main>

        <div class="container mt-5 rounded bg-light w-75 shadow">
            <div class="row aling-items-stretch "> <!--Fila principal-->
                
                <!--LADO IZQUIERDO DEL FORMULARIO-->
                <div class="col bgLogin d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded"></div>
                <!--CIERRE LADO IZQUIERDO DEL FORMULARIO-->

                <!--LADO DERECHO DEL FORMULARIO-->
                <div class="col  p-5 bg-light rounded-end"> 
                    <div class="text-end">
                        <img src="../img/blue_heartLogo.png" alt="blueHeartLogo" width="48px"> <!--LOGO-->
                    </div>
                    <h2 class="fw-bold text-center py-5 ">Inicia Sesión</h2>
                    
                    <!--LOGIN-->
                    <form action="../php/login.php" method="post">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Nombre Usuario" name="loginUser">
                        </div>

                        <div class="mb-3">
                            <input type="password"class="form-control" name="passwordUser" placeholder="Contraseña">
                        </div>


                        <div class="d-grid"> <!--Boton de enviar-->
                            <button type="submit" class="btn btn-outline-primary fw-bold">Login</button>
                        </div>

                        <div class="pt-3">
                            <span> Si aún no tienes Usuario, usa el boton <span class="btn btn-primary text-light disable">Registrate</span> o ingresa al siguiente enlace: 
                            <a href="../html/singUpUsuario.html">Registra tú cuenta</a>
                        </span>
                        </div>
                    </form> 
                    <!-- CIERRE LOGIN-->

                </div> <!--CIERRE LADO DERECHO DEL FORMULARIO-->


            </div> <!--Cierre fila principal-->

        </div> <!--CIerre Container principal-->


        <!--Apartado de CRUD-->
        <div class="container mt-5 rounded bg-light w-75 shadow">
            <div class="row aling-items-stretch "> <!--FILA CRUD-->

                <!--contenedor del CRUD-->
                <div class="col  p-5 bg-light rounded"> 
                    <div class="text-end">
                        <img src="../img/blue_heartLogo.png" alt="blueHeartLogo" width="48px"> <!--LOGO-->
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
                                <th></th> <!--Espacio para el boton Editar-->
                                <th></th><!--Espacio para el boton Eliminar-->
                            </tr>                            
                        </thead>

                        <tbody>
                            <?php
                                while($row= mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <th><?php echo $row['idUsuario'] ?></th>
                                    <th><?php echo $row['usuLogin'] ?></th>
                                    <th><?php echo $row['usuPassword'] ?></th>
                                    <th><?php echo $row['usuEstado'] ?></th>
                                    <th><?php echo $row['usuRol'] ?></th>
                                    <!--TH BOTONES EDITAR Y ELIMINAR-->
                                    <th><a href="../php/crud/actualizar.php?id=<?php echo $row['idUsuario'] ?>" class="btn btn-info">editar</a></th>
                                    <th><a href="../php/crud/deleteUser.php?id=<?php echo $row['idUsuario'] ?>" class="btn btn-danger">Eliminar</a></th>
                                </tr>
                            <?php   
                                }
                            ?>
                        </tbody>
                    </table>
                    <!-- CIERRE CRUD-->

                </div> <!--CIERRE CRUD-->


            </div> <!--Cierre fila CRUD-->

        </div> <!--CIerre Container CRUD-->

    </main>
    
    
    


     <!--=============================-->
  <!--IMAGEN VECTORIAL QUE APARECE SOBRE EL PIE DE PÁGINA-->
  <!--============================-->

    <section id="seccion-contacto" class="border-bottom border-secundary border-2">
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

  <footer class="w-100 d-flex align-items-center justify-content-center flex-wrap">

    <!--Texto del footer-->
    <p class="fs-5 px-3 pt-3"> VitalityCenter &copy; todos los derechos reservados 2022</p>

    <!--Iconos con enlaces-->
    <div class="" id="iconos">
      <a href="" class="bi bi-facebook"></a>
      <a href="" class="bi bi-twitter"></a>
      <a href="" class="bi bi-instagram"></a>
    </div>
  </footer>

  <!--Script de Boostrap CDN-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>