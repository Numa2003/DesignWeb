<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Promedio</title>
    <style>
body section{
    background-color: #B1B0B0;
    width: 330px;
    padding-left: 13px;
    padding-right: 13px;
    padding-bottom: 13px;
border: medium double #E40307;
boder-bottom-right-radius: 4px;
border-top-right-radius: 4px;
border-bottom-left-radius: 4px;
}
#frmpromedio{
    background-color: #F1AE80;
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
#frmpromedio label, input{
    width:136px;
    margin-bottom: 9px;
    margin-left: 2px;
    margin-right: 8px;
}
    </style>
</head>
<body>
    <header><h1>Notas del Alumno</h1>
</header>
<section>
    <form action="promedio1.php" method="get" id="frmnotas">
        <label for="nombre">Nombre del Alumno:</label>
        <input type="nombre" type="text" required="required" id="nombre"> <br>
        <label for="NIP">Ingrese Nota IP:</label>
        <input type="NIP" type="text" required="required" id="NIP"> <br>
        <label for="NIIP">Ingrese Nota IIP:</label>
        <input type="NIIP" type="text" required="required" id="NIIP"> <br>
        <label for="NIIIP">Ingrese Nota IIIP:</label>
        <input type="NIIP" type="text" required="required" id="NIIIP"> <br>
        <label for="NIVP">Ingrese Nota IVP:</label>
        <input type="NIVP" type="text" required="required" id="NIVP"> <br>
        <center><input type="submit" value="Enviar Datos"></center>
    </form>
</section>
</body>
</html>