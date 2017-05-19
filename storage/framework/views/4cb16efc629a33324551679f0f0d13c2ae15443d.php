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
    <ul>
        <?php $__currentLoopData = $mensajes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mensaje): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <li style="background-color:#FFCE33">
                Autor: <?php echo e($mensaje->nick); ?> <br>
                Mensaje: <?php echo e($mensaje->mensaje); ?><br>
                Fecha: <?php echo e($mensaje->fecha); ?> <br>
            </li>
            <br><br>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <br><br>Escriba su mensaje
    <input type="text" id="mensaje" name="mensaje">
    <br><br>
    <input type="submit" id="button1" name="button1">
</form>
</body>
</html>
