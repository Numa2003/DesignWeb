<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<title>Datos Fares</title>
<style type="text/css">
    .Cabecera{
        background-color: #26ED99;
        border-radius: 18px;
        text-align: center;
    }
    .secformulario{
        position: absolute;
        left: 50%;
        width: 320px;
        padding-top: 15px;
        border-radius: 13px;
        background-color: #9FB9F5;
        margin-left: -156px;
        text-align: Right;
            border-style: solid;
    }

    .secformulario h2{
        text-align: center;
    }
    .secformulario form{
        background-color: #E9E6E6;
        padding-top: 8px;
        padding-right: 8px;
        padding-bottom: 8px;
        padding-left: 8px;
    }
    input{
        padding-top: 0px;
        padding-right: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
        margin-top: 5px;
        margin-right: 5px;
        margin-bottom: 5px;
        margin-left: 5px;
    }

    .secformulario form #submit{
        width: 117px;
        margin-right: 90px
    }
</style>
</head>
<body>
    <header class="Cabecera">
        <h1>Ediciones Fares</h1>
    </header>
    <section class="secformulario"> <h2>
    Ingresar Estudiantes:
    </h2>
    <form action="AgregarDatosalu.php" method="post" accept-charset="UTF-8">
        <label for="codigo">Codigo:<span class="required">*</span></label>
        <input type="text" id="codigo" name="codigo" value="" placeholder="Su codigo"
        required="required" autofocus> <br>
        <label for="nombre">Nombre:<span class="required">*</span></label>
        <input type="text" id="nombre" name="nombre" value="" placeholder="Nombres y Apellidos"
        required="required"> <br>
        <label for="direccion">Direcci&oacute;n:<span class="required">*</span></label>
        <input type="text" id="direccion" name="direccion" value="" placeholder="Ingresar Direccion"
        required="required">
        <label for="telefono">Telefono:<span class="required">*</span></label>
        <input type="text" id="telefono" name="telefono" value="" placeholder="Ingresar aqui su telefono"
        required="required"> <br>
        <label for="sexo">Sexo:<span class="required">*</span></label>
        <select name="sexo" id="sexo">
            <option value="H">Hombre</option>
            <option value="M">Mujer</option>
        </select> <br>
        <label for="Observaciones">Observaciones:<span class="required">*</span></label>
<input type="text" id="Observaciones" name="Observaciones" value="" placeholder="Observaciones">
<input type="submit" value="Guardar Datos" id="submit">
    </form>
    </section>
</body>
</html>