<html>
    <head>
       <link rel="stylesheet" href="classboard.css"> 
       <meta name="viewport" content="width=device-width, user-scalable=no">
      <!-- <META HTTP-EQUIV="refresh" CONTENT="1"> -->  
    </head>
<body>
        <div id=content>
                <div id="white-board">
                  <div id="text">
                    <span>!Preguntame!</span>
                   <br> 
                    <span>La evolucion Humana</span>
                  </div>
              
                  <?php
                      
                      include("datos.txt");
                      ?>         
              
                      
                  <div id="eraser"></div> 
                  <a href="ranking-form.php"> <div id="red-pen"></div> </a>
                  <div id="blue-pen"></div>
                </div>                               
              </div>
              <div class="div-q">
              <form action="guardadatos.php" method="post" >
                  <label for="fname">Nombre</label>
                  <input type="text" id="fname" name="nombre" placeholder="Tu Nombre..">                 

                  <label for="fname">Tu Pregunta</label>
                  <textarea name="pregunta">Ej.. ¿Cual es la razón?</textarea> 
                
                  <input type="submit" value="Enviar">
                </form>
              </div>
              

                      
              

    

        
</body>
</html>