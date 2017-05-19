<!doctype html>
<html lang="<?php echo e(config('app.locale')); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chat</title>
</head>
<body>
<form method="get" name="form1">
    <br>Escriba su nickname:
    <input type="text" id="nick" name="nick">
    <br><br>Escriba su email:
    <input type="text" id="email" name="email">
    <br><br>Escriba su contraseña:
    <input type="text" id="clave" name="clave">
    <br><br>
    <input type="submit" id="button">
</form>
</body>
</html>
