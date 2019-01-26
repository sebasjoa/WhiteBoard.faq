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
$para=substr($_REQUEST['gen_code'],0,1); 

$gen_code="";

if (!empty($_REQUEST['gen_code'])){

if ($para=="c" || $para=="w"){
      $gen_code=substr($_REQUEST['gen_code'],1,22);
       }else{
            $gen_code=$_REQUEST['gen_code'];        
}
}



if ($para=="c"){
            //$valor=mt_rand();

$sql = "INSERT INTO whiteboard_codes (GENERATE_CODE, WHOWAS ) VALUES ("."'".$gen_code."'".","."'".$gen_code."'".")";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
      $archivo = fopen($gen_code.'.txt','a');
      $para="w";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}



$sql = "SELECT SER_NO, GENERATE_CODE, WHOWAS FROM `whiteboard_codes` WHERE GENERATE_CODE = "."'".$gen_code."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

      if($para=="w"){
       header('Location: WhiteBoard.php?wcd='.$gen_code);       
      }else{
       header('Location: mobilea.php?wcd='.$gen_code);        
      }

} else {
      header('Location: index.html?nexist=1');  
}





      mysqli_close($conn);



?>