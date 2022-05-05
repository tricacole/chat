
<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "chat";

$conectar = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['EnviarMensaje'])){
  if(!empty($_POST['Mensaje'])){
      
    $mensaje = $_POST['Mensaje'];

    $query = "INSERT into chat.mensajes(usuario, mensaje, fecha)VALUES('pablito67', '$mensaje', CURRENT_TIMESTAMP())";
    $run = mysqli_query($conectar, $query) or die(mysqli_error($conectar));    
  }
}
       header( "Location: index.php");
?>

