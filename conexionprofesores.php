<?php
include("conexion.php");
mb_http_input("utf-8");
mb_http_output("utf-8");
if ($_SERVER['REQUEST_METHOD']==="POST") {
    $identidad = $_POST['identidad'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $sexo = $_POST['sexo'];
    $estado = $_POST['estado'];
    $observaciones = $_POST['observaciones'];
    $sql_insert = "INSERT INTO profesores(identidad,nomprof,direccion,telefono,sexo,estado)VALUES('$identidad','$nombre','$direccion','$direccion','$telefono','$sexo','$estado')";

    if ($conec->query($sql_insert)===True) {
        echo "La operacion se ha realizado con exito";
    }
}
else {
    echo "error al insertar los datos";
    echo "Errno:" .$conec->error.".\n";
}
$conec->close();

?>