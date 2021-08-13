<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ediciones Fares</title>
    <style type="text/css">
body section{
    background-color: #B1B0B0;
    width: 391px;
    padding-left: 13px;
    padding-top: 13px;
    padding-right: 13px;
    padding-bottom: 13px;
border: medium double #E40307;
boder-bottom-right-radius: 4px;
border-top-right-radius: 4px;
border-bottom-left-radius: 4px;
}
#frmnumero{
    background-color: #F3CB82;
    border-style: solid;
    border-color: #050505;
    /* [disabled]border-top-left-radius: 5px;*/
    border-top-right-radius: 5px;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    padding-left: 10px;
    padding-top: 10px;
    padding-right: 10px;
    padding-bottom: 10px;
}
</style>
</head>
<body>
<header class="Cabecera">
    <h2>C&aacute;lculo de Salario</h2>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post" id="frmnumero" accept-charset="UTF-8">
<label for="nombre">Nombre:<span class="required">*</span></label>
<input type="text" id="nombre" name="nombre" value="" required="required"> <br>
<label for="sueldo">Sueldo:<span class="required">*</span></label>
<input type="text" id="sueldo" name="sueldo" value="" required="required"> <br>
<input type="submit" value="Resultado" id="submit">
</form>
<?php include("funcion5.php");?>
<?php
if ($_SERVER['REQUEST_METHOD']==="POST") {
    $nom=$_POST['nombre'];
    $sueldo=$_POST['sueldo'];
    list($IHSS,$cooperativa)=calcularfares($sueldo);
    $tdeducciones=$IHSS+$cooperativa;
    $sneto=$sueldo -$tdeducciones;
    echo "<center><p>
    Nombre:$nom <br>
    sueldo: $sueldo <br>
    IHSS: $IHSS <br>
    Cooperativa: $cooperativa <br>
    Total deducciones: $tdeducciones <br>
    Total a Pagar: $sneto
    </p></center>";
}
?>
</header>
</body>
</html>