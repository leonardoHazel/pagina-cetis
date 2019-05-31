<?php
$sesion=null;

include_once'proceso/conexion.php';

$usuario= $_POST["usuario"];
$contrasena= $_POST["contrasena"];


if ($sesion==false ){
$query = "SELECT * FROM `usuarios`WHERE usuario = '$usuario' and contra = '$contrasena'";
$result = $mysqli->query($query);



while($row = $result->fetch_array())
{
$rows[] = $row; 
}

if( isset($rows)==true){
    $sesion=true;
    $value=true;
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
$_SESSION["newsession"]=$value;

header("location: index.php");
     echo "sesion iniciada";
 
}
else{echo "contraseña o usuario incorectos";
    $sesion=false;
;
    }
}


/* free result set */
$result->close();

/* close connection */
$mysqli->close();
?>
