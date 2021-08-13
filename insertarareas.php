<?php
mb_http_input("utf-8");
mb_http_output("utf-8");
if ($_SERVER['REQUEST_METHOD']==="POST")
{
$nomarea = $_POST['nomarea'];
$Observaciones = $_POST['Observaciones'];

$sql_insert= "INSERT INTO areas(nomarea,Observaciones)VALUES('$nomarea','$Observaciones')";
if ($conec->query($sql_insert)===True) {
    echo "La operacion se ha realizado con exito";
}
else {
    echo "error al insertar los datos";
}
}
?>