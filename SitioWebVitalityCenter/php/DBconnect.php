<?php

$conection = mysqli_connect("localhost","root","0000","vitalitycenter"); #la contraseña de mi usuario de tipo Root, es '0000'. En otro dispositivo puede variar y ser nulo ""; 



if (!$conection) {

    echo"Error al conectar a la base de datos";
    
}else{
    echo".";
}


?>