<?php
$Vnombre=$_GET["nombre"];
$NOIP=$_GET["NIP"];
$NOIIP=$_GET["NIIP"];
$NOIIIP=$_GET["NIIIP"];
$NOIVP=$_GET["NIVP"];
$Promedio=($NOIP+$NOIIP+$NOIIIP+$NOIVP)/4;

echo "$Vnombre,tiene el promedio:$Promedio";
?>