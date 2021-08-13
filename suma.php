<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de Tres Numeros</title>
    <style type="text/css">
body section{
    background-color: #B1B0B0;
    width: 391px;
    padding-left: 13px;
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
<header>
    <h1>Suma de Tres N&uacute;meros</h1>
</header>
<section>
    <form action="Suma3.php" method="post" id="frmnumero">
        <label for="num1">Ingrese el primer n&uacute;mero</label>
<input name="num1" type="number" require="required" id="num1"> <br>
<label for="num2">Ingrese el segundo n&uacute;mero</label>
<input name="num2" type="number" require="required" id="num2"> <br>
<label for="num3">Ingrese el tercer n&uacute;mero</label>
<input name="num3" type="number" require="required" id="num3"> <br>
<input type="submit" value="Enviar Datos">
    </form>
</section>
</body>
</html>