<html>
    <head> 
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="ranking-style.css"> 
</head>

<body style="text-align: center;" onLoad="ejecuta_consulta()" >


<div class="div-r"> 
<a href="whiteboard.php" style="float: left;font-size: 30px;"><i class="fas fa-chalkboard"></i></a> 
<a href="*" style="float:right;font-size: 30px;"><i class="fas fa-sync-alt"></i> </a>
<a href="*" style="float:right;font-size: 30px; margin-right: 5px"><i class="fas fa-dumpster"></i></a>

<form action="insertarating.php" method="post" style="margin-top: 150px;">
<center> <label class="tl-st" for="fname">Puntuacion Obtenida </label> </center> 

    
<?php      

 $servername = "127.0.0.1";
 $database = "ranking";
 $username = "prueba";
 $password = "password";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
};

$maxnroviaje=mysqli_query($conn,"SELECT sum(valor)/(select count(ser_no) from`ranking_values`  ) as valor FROM `ranking_values`");
$nroviajenew=mysqli_fetch_assoc($maxnroviaje);
$nroviajex=is_float($nroviajenew["valor"]);

$varvalor = round($nroviajenew["valor"]);
mysqli_close($conn);

   

  if ($varvalor == "2") {
    $califtext = "Mal";
  };
  if ($varvalor == "3") {
    $califtext = "Regular";
  };
  if ($varvalor =="4") {
    $califtext = "Bien";
  };
  if ($varvalor == "5") {
    $califtext = "Muy Bien";
  };
  if ($varvalor == "1") {
    $califtext = "Muy Mal";
  };
  if ($varvalor == "") {
    $califtext = "Sin Calificacion";
    $varvalor = "0";
  };




$query = "SELECT * FROM `ranking_values` ";

// Conectar a la Base de Datos
$link = mysqli_connect($servername, $username, $password, $database) or 
  die('No se ha podido conectar con la Base de Datos.');

  // Lanzar la Query
$result = mysqli_query($link,$query) or 
 die('Query errónea:  '.$query);


// Crear un array de registros
$arrusers = array();
if(mysqli_num_rows($result)) {
  while($user = mysqli_fetch_assoc($result)) {
    $arrusers[] = array('Usuario' => $user);
  }
}
// salida en el formato JSON
//header('Content-type: application/json');
$json_arr = json_encode(array('Usuarios' => $arrusers));


//str_replace(array('\'', '"'), '', $str)
//echo str_replace('\\"','`', $json_arr) ;


// desconectar
@mysqli_close($link);
?>



<p class="clasificacion">  
<label for="radio1" style="color: orange">★ 
<?php echo $varvalor ?>
</label>
</p>
<div id="calif-text"> <?php echo $califtext ?> !  </div>  

</form>
</div>
<table id="result"></table>
    </div>


    <input type="hidden" name="json_var" value= "<?php echo $varvalor ?>" >
</body>


<script src="https://code.jquery.com/jquery-1.11.0.min.js" integrity="sha256-spTpc4lvj4dOkKjrGokIrHkJgNA0xMS98Pw9N7ir9oI=" crossorigin="anonymous"></script>
<script src="lib/jsreports/jsreports-all.min.js?1.4.91" type="text/javascript"></script>
<script src="script.js" type="text/javascript"></script>



</html>