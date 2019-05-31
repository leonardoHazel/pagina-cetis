      <?php  include_once'nav/nav.php';

if($_SESSION["newsession"]==true){?>


      <!DOCTYPE html>
      <html lang="es">


      <br><br><br><br><br><br>
      <main role="main" class="container">

          <div class="starter-template">
              <h1>agregar publicacion</h1>
              <p class="lead">
                  <form action="proceso/el archivo para mandar" method="POST">
                      <!-- /.datos que ingresar-->
                      <div class="from group">
                          <label for="id libro">id </label>
                          <input class="form-control" type="text" name="id_libro" placeholder=""></div><br>

                      <div class="from group">
                          <label for="titulo">titulo</label>
                          <input class="form-control" type="text" name="titulo" placeholder=""></div><br>

                      <div class="from group">
                          <label for="tex">texto</label>
                          <input class="form-control" type="text" name="tex" placeholder=""></div><br>

                      <div class="from group">
                          <label for="fecha">fecha</label>
                          <input class="form-control" type="date" name="fecha" placeholder=""></div><br>

                      <div class="from group">
                          <label for="editorial">color de la publicacion</label>
                          <select class="form-control" name="color" id="color">
                              <option value="light">blanco</option>
                              <option value="primary">azul</option>
                              <option value="warning">amarillo</option>
                              <option value="success">verde</option>
                              <option value="danger">rojo</option>
                              <option value="info">azul claro</option>
                              <option value="dark">gris oscuro</option>
                          </select>
                      </div>

                      <!-- /boton de registrar -->
                      <br> <button class="btn btn-success">ingresar</button>


                  </form>


          </div>

      </main>



      <?php
include_once'nav/scrip.php';
?>
      </body>

      </html>
      <?php
}
else{
    header("location: index.php");
    }
?>
