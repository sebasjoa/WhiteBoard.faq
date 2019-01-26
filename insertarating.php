<?php
$servername = "127.0.0.1";
$database = "ranking";
$username = "prueba";
$password = "password";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
// echo "Connected successfully";


$nombre="";
if (!empty($_REQUEST['nombre'])){
$nombre="'".$_REQUEST['nombre']."'";
}


$valor="";
if (!empty($_REQUEST['estrellas'])){
$valor=$_REQUEST['estrellas'];
}



$sql = "INSERT INTO ranking_values (valor,comentario,whowas) VALUES ($valor,$nombre,'o')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


header('Location: end.html');


 



?>