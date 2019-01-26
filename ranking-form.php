<html>

    <head> 
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="ranking-style.css"> 
</head>

<body >


<div class="div-q"> 
<form action="insertarating.php" method="post">
<center> <label class="tl-st" for="fname">Cuentanos como estuvo!</label> </center> 
  <p class="clasificacion">
    <input id="radio1" type="radio" name="estrellas" value="5" onclick="document.getElementById('calif-text').innerHTML = 'Muy Bien'"><!--
    --><label for="radio1">★</label><!--
    --><input id="radio2" type="radio" name="estrellas" value="4" onclick="document.getElementById('calif-text').innerHTML = 'Bien'"><!--
    --><label for="radio2">★</label><!--
    --><input id="radio3" type="radio" name="estrellas" value="3" onclick="document.getElementById('calif-text').innerHTML = 'Regular'"><!--
    --><label for="radio3">★</label><!--
    --><input id="radio4" type="radio" name="estrellas" value="2" onclick="document.getElementById('calif-text').innerHTML = 'Mal'"><!--
    --><label for="radio4">★</label><!--
    --><input id="radio5" type="radio" name="estrellas" value="1" onclick="document.getElementById('calif-text').innerHTML = 'Muy Mal'"><!--
    --><label for="radio5">★</label>
  </p>
  <div id="calif-text"> Mal </div>
  <label class="tl-st" for="fname">Algun Comentario ..</label>
                  <textarea name="nombre">Ej.. "Estuvo genial!"</textarea> 
                
                  <input type="submit" value="Enviar Calificación">
</form>
</div>



<noscript>Necesitas tener habilitado javascript para poder votar</noscript>

</body>
</html>