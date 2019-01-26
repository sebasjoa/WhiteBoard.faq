 //
sebas = '{"Usuarios":[{"Usuario":{"SER_NO":"1","VALOR":"3","COMENTARIO":"Ej.. `Estuvo genial!`","WHOWAS":"o"}},{"Usuario":{"SER_NO":"2","VALOR":"5","COMENTARIO":"Ej.. `Estuvo genial!`","WHOWAS":"o"}},{"Usuario":{"SER_NO":"3","VALOR":"4","COMENTARIO":"Ej.. `Estuvo genial!`","WHOWAS":"o"}},{"Usuario":{"SER_NO":"4","VALOR":"2","COMENTARIO":"Ej.. `Estuvo genial!`","WHOWAS":"o"}},{"Usuario":{"SER_NO":"5","VALOR":"4","COMENTARIO":"Ej.. `Estuvo genial!`","WHOWAS":"o"}},{"Usuario":{"SER_NO":"6","VALOR":"3","COMENTARIO":"Ej.. `Estuvo genial!`","WHOWAS":"o"}},{"Usuario":{"SER_NO":"7","VALOR":"3","COMENTARIO":"Ej.. `Estuvo genial!`","WHOWAS":"o"}},{"Usuario":{"SER_NO":"8","VALOR":"3","COMENTARIO":"Ej.. `Estuvo genial!`","WHOWAS":"o"}},{"Usuario":{"SER_NO":"9","VALOR":"4","COMENTARIO":"Ej.. `Estuvo genial!`","WHOWAS":"o"}},{"Usuario":{"SER_NO":"10","VALOR":"3","COMENTARIO":"Ej.. `Estuvo genial!`","WHOWAS":"o"}},{"Usuario":{"SER_NO":"11","VALOR":"5","COMENTARIO":"Ej.. `Estuvo genial!`","WHOWAS":"o"}}]}'
//document.getElementById("json_var").value
// "<?php echo $json_arr ?>"  
  function consultasjs( qry, fn ){  
  var url = 'http://5.189.151.197:8000/api/helper/find?query='; 
   $.get( url + qry, function(record) {
       fn( record.data );
       return record.data;
      });
    };

function ejecuta_consulta(qry) {    
    $("#result").html("");
  //  var array = consultasjs( qry, function(data) {
    var data = JSON.parse(sebas).Usuarios;
    var tFoot =  document.createElement("tfoot");
    var tF_row = tFoot.insertRow();
       if (data !== undefined){
         var cell = tF_row.insertCell();
         cell.colSpan = Object.keys(data[0]).length;
         cell.align = "center";
         cell.appendChild(document.createTextNode(data.length+' Registro(s)'));
         $("#count").text(data.length+' Registro(s)');
    
    var arrayOfThisHead = [];     
	var tHead = document.createElement("thead");	
    var tH_row = tHead.insertRow();
     $.each(data[0].Usuario, function(k, v) {
            var cell = tH_row.insertCell();
            cell.appendChild(document.createTextNode(k));         
            arrayOfThisHead.push(k);
        })        
    var tbl_body = document.createElement("tbody");
    var odd_even = true;  
     $.each(data, function() {         
        var tbl_row = tbl_body.insertRow();
        tbl_row.className = odd_even ? "odd" : "even";
     $.each(this.Usuario, function(k, v) {
            var cell = tbl_row.insertCell();
          cell.appendChild(document.createTextNode(v));
        })        
        odd_even = !odd_even;               
    })    
    $("#result").append(tHead);
    $("#result").append(tbl_body);
//  $("#result").append(tFoot);

 $('#result tr').on('click', function(){
   var dato = $(this).find('td').html();   
  });
} else
$("#count").text(data.length+' No se encontraron Registro(s)');
 //});   
};

$('button.btnselect').on('click', function(){    
    $('button.selected').removeClass('selected');
    $(this).addClass('selected');   
});