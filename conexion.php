<?php
$conec = new mysqli("localhost","root","","institutofares");
if ($conec->connect_errno) {
        echo "Fallo al conectar a MYSQL:(".$conec->connect_errno .")".$conec->connect_error;
}
echo "Conexion realizada con exito,$conec->host_info.";
?>