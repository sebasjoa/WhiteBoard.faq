<html>
        <head>
          <link rel="stylesheet" href="whiteboard.css">  
         <!-- <meta HTTP-EQUIV="refresh" CONTENT="1">  -->
         
       
        </head>
<body onload="var objDiv = document.getElementById('white-board'); objDiv.scrollTop = objDiv.scrollHeight;">

<script>
  function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
        return results == null ? "": decodeURIComponent(results[1]);
    }
  var prodId = getParameterByName('nexist');
  var wcode = getParameterByName('wcd');      
  var i, refAttr; 
  var metaTags = document.getElementsByTagName('meta');

   if (prodId == 1) {
         alert("No existe esta Pizarra");
          
         location.href ="index.html"; 
        }  

        


 </script>

<div id=content>
  <div id="white-board" style="overflow:auto" >
    <div id="text">
      <span id="titlelb"></span>
     <br> 
      <span>La evolucion Humana</span>
    </div>
<div class="mates"> 
<?php        
  include($_GET['wcd'].".txt");
?>
</div>



<script>
  function funcion(){
  alert('ehh!')      
 
  
    
  }
</script>
<a href="rating_table.php"> 
    <div id="red-pen" ></div></a>
    <div id="blue-pen"></div>
<form action="borradatos.php" method="post">                 
 <input id="eraser" type="submit" value="" name="boton">
</form>
    
  </div>
</div>

<script>
 document.getElementById("titlelb").innerHTML = "!Preguntame! #"+wcode;
</script>
        
      
  

</body>
</html>