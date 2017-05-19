<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chat</title>
</head>
<body>
<form method="get" name="form1">
    <ul>
        @foreach($mensajes as $mensaje)

            <li style="background-color:#FFCE33">
                Autor: {{$mensaje->nick}} <br>
                Mensaje: {{$mensaje->mensaje}}<br>
                Fecha: {{$mensaje->fecha}} <br>
            </li>
            <br><br>

        @endforeach
    </ul>
    <br><br>Escriba su mensaje
    <input type="text" id="mensaje" name="mensaje">
    <br><br>
    <input type="submit" id="button1" name="button1">
</form>
</body>
</html>
