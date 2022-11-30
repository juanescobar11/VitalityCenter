<?php
include('../DBconnect.php');

$id = $_GET['id'];

$sql = "SELECT * FROM pacientes WHERE idPaciente = '$id';";

$query = mysqli_query($conection,$sql);

$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar usuario</title>
</head>
<body>
    
    <div class="container mt-5"></div>
    <form action="../crud/updatePaciente.php" method="POST">

    <input type="hidden" name="idPaciente" value="<?php echo $row['idUPaciente'] ?>">

    <input type="text"  class="form-control mb-3" name="pacIdentificacion" placeholder="Paciente Nuevo" value="<?php echo $row['pacIdentificacion'] ?>">
    <input type="password"  class="form-control mb-3" name="pacNombres" placeholder="Nombre Nuevo" value="<?php echo $row['pacNombres'] ?>">
    <input type="text"  class="form-control mb-3" name="pacApellidos" placeholder="Apellido" value="<?php echo $row['pacApellidos'] ?>">
    <input type="text"  class="form-control mb-3" name="pacFechaNacimiento" placeholder="Fecha Nueva" value="<?php echo $row['pacFechaNacimiento'] ?>">
    <input type="text"  class="form-control mb-3" name="pacSexo" placeholder="Sexo Nuevo" value="<?php echo $row['pacSexo'] ?>">


    <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
    </form>

</body>
</html>