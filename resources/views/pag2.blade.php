<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="d-flex justify-content-around">
    <div class="p-3 bd-highlight">
        <h1>Formulario de Registro de Usuarios</h1>
        <a href="RegistroController" > Click aqui </a><br><br>
        <form method="POST" id="form" name="form" action="RegistroController" >

            <div class="form-group">
                <label for="exampleInputName">Codigo Usuario</label>
                <input class="form-control" type="text" placeholder="ingresar codigo" name="codigo_usuario" id="codigo_usuario" >
                <input type="hidden" name="control" value="GUARDAR">
            </div>
            <div class="form-group">
                <label for="exampleInputName">Nombre del usuario</label>
                <input class="form-control" type="text" placeholder="ingresar nombre del usuario" name="nombre_usuario" id="nombre_usuario" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">correo</label>
                <input type="email" class="form-control"  aria-describedby="emailHelp" name="correo" id="correo"  >
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>

            <div class="form-group">
                <label for="exampleInputTelefono1">telefono</label>
                <input type="email" class="form-control"  aria-describedby="emailHelp" name="telefono" id="telefono"  >
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>

            <select class="form-control" name="opcion">
                <option value="1">Opción 1</option>
                <option value="2">Opción 2</option>
            </select><br>
            <%-- <button type="submit" class="btn btn-primary">Guardar</button> --%>
            <button type="button" onclick="enviarRegistroUsuario()" class="btn btn-success">Guardar</button>
            <button type="button" class="btn btn-danger">Cancelar</button>
        </form>
    </div>

    <h1>Aqui estoy en usuarios</h1>

    <a href="{{route('layout')}}"> Link para regresar a layout</a>
    <a href="{{route('formulario')}}"> Link para regresar a formulario</a>


</body>
</html>
