<?php
$conec = new mysql("localhost","root","","institutofares");
if ($conec->connect_errno) {
    echo "Fallo al conectar a MYSQL:(".$conec->connect_errno.")" .$conec->connect_error;
}

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$Direccion=$_POST['direccion'];
$Telefono=$_POST['telefono'];
$Sexo= $_POST['sexo'];
$Observaciones= $_POST['Observaciones']

$sqlinsert = "INSERT INTO datospalumnos(Codigo,Nombre,Direccion,Telefono,Sexo,Observaciones)
VALUES('$codigo','$nombre','$Direccion','$Telefono','$Sexo','$Observaciones')";
if ($conec->query($sql_insert)===True) {
echo '<div align="center">,"La operacion se ha realizado con exito",</div>';
}
?>