<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <title>Formulario de Contacto</title>
</head>
<body>
    <div class="box">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" class="form-control" name="nombre", placeholder="Nombre:" value="<?php if(!$enviado && isset($name)) echo $name ?>">

            <input type="email" class="form-control" name="correo", placeholder="Correo:" value="<?php if(!$enviado && isset($mail)) echo $mail ?>">

            <textarea name="mensaje" class="form-control" placeholder="Mensaje..." id=""><?php if(!$enviado && isset($msg)) echo $msg ?></textarea>

            <?php if(!empty($error)): ?>

                <div class="alert error">
                    <?php echo $error; ?>
                </div>
            
            <?php elseif(!empty($enviado)): ?>

                <div class="alert success">
                    <p>Información enviada correctamente</p>
                </div>

            <?php endif; ?>

            <input type="submit" value="Enviar Mensaje" name="submit" class="btn">
        </form>
    </div>
</body>
</html>