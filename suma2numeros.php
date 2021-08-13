<!DOCTYPE html>
<html lang="es">
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

#frmnumeros{
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
<h1>Ediciones Fares</h1>
</header>
<section class="secformulario">
    <h2>Sumar dos N&uacute;meros</h2>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" id="frmnumero" accept-charset="UTF-8">
<label for="n1">Primer N&uacute;mero:<span class="required">*</span></label>
<input type="text" name="n1" id="n1" value="" required="required"> <br>
<label for="n2">Segundo N&uacute;mero:<span class="required">*</span></label>
<input type="text" name="n2" id="n2" value="" required="required"> <br> <br>
<input type="submit" value="Sumar" id="submit">
</form>
<?php include("suma2.php") ?>
<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];
    $n3=suma($n1,$n2);
    echo "<center>Resultado:$n1 + $n2 = $n3</center>";
}?>
</section>
</body>
</html>