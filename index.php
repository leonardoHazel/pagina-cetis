<!DOCTYPE html>
<?php
include_once'nav/nav.php';
?>

<br>
<br><br><br><br>
<div id="carro" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#carro" data-slide-to="0" class="active"></li>
        <li data-target="#carro" data-slide-to="1"></li>
        <li data-target="#carro" data-slide-to="2"></li>
        <li data-target="#carro" data-slide-to="3"></li>
        <li data-target="#carro" data-slide-to="4"></li>
        <li data-target="#carro" data-slide-to="5"></li>
        <li data-target="#carro" data-slide-to="6"></li>
        <li data-target="#carro" data-slide-to="7"></li>
        <li data-target="#carro" data-slide-to="8"></li>
        <li data-target="#carro" data-slide-to="9"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="img/foto1.jpg" alt="cetis" width="10" height="10">
        </div>

        <div class="carousel-item">
            <img src="img/foto2.jpg" alt="cetis" width="10" height="10">
        </div>

        <div class="carousel-item">
            <img src="img/foto3.jpg" alt="cetis" width="10" height="10">
        </div>

        <div class="carousel-item">
            <img src="img/foto4.jpg" alt="cetis" width="10" height="10">
        </div>

        <div class="carousel-item">
            <img src="img/foto5.jpg" alt="cetis" width="10" height="10">
        </div>

        <div class="carousel-item">
            <img src="img/foto6.jpg" alt="cetis" width="10" height="10">
        </div>

        <div class="carousel-item">
            <img src="img/foto7.jpg" alt="cetis" width="10" height="10">
        </div>

        <div class="carousel-item">
            <img src="img/foto8.jpg" alt="cetis" width="10" height="10">
        </div>

        <div class="carousel-item">
            <img src="img/foto9.jpg" alt="cetis" width="10" height="10">
        </div>


    </div>

    <a class="carousel-control-prev" href="#carro" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#carro" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
    <br>
</div>
<?php
include_once'proceso/conexion.php';

$query = "SELECT * FROM `pub`  ORDER BY `fecha` DESC";
$result = $mysqli->query($query);

while($row = $result->fetch_array())
{
$rows[] = $row;
}

foreach($rows as $row)
{
     
 ?> <html>
<div class="container">
    <div class="card bg-<?php echo $row['color'];?> ">
        <div class="card-body">
            <h4 class="card-title"> <?php echo "titulo: ".$row['titulo']; ?> </h4>

            <p class="card-text "> <?php  echo "texto: ".$row['tex']; ?></p>
            <div class="card-footer"><?php echo "fecha: ".$row['fecha'];    ?></div><br>
            <?php if(isset($_SESSION["newsession"])==true){ 
    if($_SESSION["newsession"]==true){ ?>
            <a href="#" class="btn btn-info">editar</a>
            
            <a href="#" class="btn btn-danger">borrar</a>
            

            <?php }}?>


        </div>
    </div>
    <br><br>
    </div>

</html><?php
}

/* free result set */
$result->close();

/* close connection */
$mysqli->close();

?>



<div class="card ">
    <img class="card-img-top" src="img/carro1.jpg" alt="la wea">
    <div class="card-body">
        <h4 class="card-title">otras weas</h4>
        <p class="card-text">acomodar el tamaño de el carrusel, conseguir fotos de el cetis, acomodar los botones de la barra de navegacion hacer las demas paginas(tramites, informes, carreras etc,etc...) y la fuente</p>
        <a href="#" class="btn btn-primary">un boton we</a>

    </div>
</div>






<?php
include_once'nav/scrip.php';
?>
</body>

</html>
