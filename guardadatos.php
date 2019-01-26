<html>
<body>
<?php
$nombre="";
if (!empty($_REQUEST['nombre'])){
$nombre=
'<p> <span class="name">'.$_REQUEST['nombre'].': </span> '  ;
}
 
$pregunta="";
if (!empty($_REQUEST['pregunta'])){
$pregunta=
'<span class="texto">'.$_REQUEST['pregunta'].'</span> </p>'
;
}

 
//Luego sobrescribo el txt
 
$archivo="datos.txt";
 
$file=fopen($archivo,"a"); 
fwrite($file,$nombre.$pregunta);  


header('Location: index.php');

     ?>
</body>
</html>