<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>formulario de prueba</title>
    </head>
    <body>
        <form class="" action="formulario.php" method="post">
        <?php
            $array = ['j', 'a', 'v', 'i', 'e', 'r'] ;
            $propietario = '';
        ?>
            Rellene su nombre y envíe:
            <input type="text" name="nombre" value="" /><br>
        <?php
            if (isset($_POST['nombre'])) {
                if ($_POST['nombre'] == 'javier') {
                    foreach ($array as $key => $value) {
                        $propietario = $propietario . $value;
                    }
                }
                else {
        ?>
        <?=
                'Debe rellenar con el nombre javier';
        ?>
            <br>
        <?php
                }
            }
        ?>
            Propietario:
            <input type="text" name="propietario" value=
        <?php
            if (isset($_POST['propietario']) && $_POST['propietario'] == 'javier') {
        ?>
        <?=
                htmlspecialchars('javier');
        ?>
            ><br>
            <h1>
                El propietario
        <?=
                '' . htmlspecialchars($_POST['propietario']) . '';
        ?>
                es correcto!
            </h1>
        <?php
            }
            else {
        ?>
        <?=
                htmlspecialchars($propietario);
        ?>
            ><br>
            Rellene con algún nombre para continuar
        <?php
            }
        ?>
            <input type="submit" name="enviar" value="enviar" />
        </form>
    </body>
</html>
