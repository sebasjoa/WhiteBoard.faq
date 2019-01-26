<?php
$arch="";  
$arch = fopen ("datos.txt", "w+");
fwrite($arch, "");
fclose($arch); 
     
     
     

header('Location: whiteboard.php');     
     ?>