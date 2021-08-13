<?php
function calcularfares($sueldo)
{
if ($sueldo>=7000) {
    $seguro=7000*3.5/100;
}
else {
    $seguro=$sueldo*3.5/100;
}
if ($sueldo>=5000) {
    $coopera= 500;
}
else {
    $coopera=300;
}
return array($seguro,$coopera);
}
?>