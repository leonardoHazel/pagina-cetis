<!DOCTYPE html>
<html lang="es">
<?php
include_once'nav/nav.php';
?>

<br><br><br><br><br><br>
<main role="main" class="container">

    <div class="starter-template">
        <h1>inicio de sesion</h1>
        <p class="lead">
            <form action="sesion_p.php" method="POST">
                <!-- /.datos que ingresar-->
                <div class="from group">
                    <label for="usuario">usuario </label>
                    <input class="form-control" type="text" name="usuario" placeholder=""></div><br>

                <div class="from group">
                    <label for="contrasena">contraseña</label>
                    <input class="form-control" type="password" name="contrasena" placeholder=""></div><br>

                <!-- /boton de registrar -->
                <br> <button class="btn btn-success" type="submit">ingresar</button>


            </form>


    </div>

</main>



<?php
include_once'nav/scrip.php';
?>
</body>

</html>
