<?php
include('../DBconnect.php');

$id = $_GET['id'];

$sql = "SELECT * FROM usuarios WHERE idUsuario = '$id';";

$query = mysqli_query($conection,$sql);

$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>
<body>
    
    <div class="container mt-5"></div>
    <form action="../crud/updateUser.php" method="POST">

    <input type="hidden" name="idUsuario" value="<?php echo $row['idUsuario'] ?>">

    <input type="text"  class="form-control mb-3" name="usuLogin" placeholder="Usuario Nuevo" value="<?php echo $row['usuLogin'] ?>">
    <input type="password"  class="form-control mb-3" name="usuPassword" placeholder="Contraseña Nueva" value="<?php echo $row['usuPassword'] ?>">
    <input type="text"  class="form-control mb-3" name="usuEstado" placeholder="Estado Nuevo" value="<?php echo $row['usuEstado'] ?>">
    <input type="text"  class="form-control mb-3" name="usuRol" placeholder="Rol Nuevo" value="<?php echo $row['usuRol'] ?>">

    <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
    </form>

</body>
</html>