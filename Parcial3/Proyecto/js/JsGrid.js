$('document').ready(function (){
    var IdCliente, opcion;
opcion = 4;
    
tablaPersona = $('#tablaPersona').DataTable({  
    "ajax":{            
        "url": "./php/JsGrid.php", 
        "method": 'POST', 
        "data":{opcion:opcion}, 
        "dataSrc":""
    },
    "columns":[
        {"data": "IdCliente"},
        {"data": "NombreCliente"},
        {"data": "Colonia"},
        {"data": "Calle"},
        {"data": "NumDomicilio"},
        {"data": "Telefono"},
        {"data": "NumMascotas"},
        {"defaultContent": 
        "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEditar'><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>"}
    ]
});     

//Insertar
$("#btnGuardar").click(function(){
    opcion = 1; //Insertar          
    user_id=null;
    $('#formPersonas').submit(function(e){       
        e.preventDefault();             
        nombre = $.trim($('#nombre').val());    
        colonia = $.trim($('#colonia').val());
        calle = $.trim($('#calle').val());    
        numDomicilio = $.trim($('#numDomicilio').val());    
        telefono = $.trim($('#telefono').val());
        numMascotas = $.trim($('#nummascotas').val()); 

            $.ajax({
                url: "./php/JsGrid.php",
                type: "POST",
                datatype:"json",    
                data:  {IdCliente:IdCliente,nombre:nombre,colonia:colonia,calle:calle, numDomicilio:numDomicilio, telefono:telefono, nummascotas:numMascotas,opcion:opcion},    
                success: function(data) {
                  tablaPersona.ajax.reload(null, false);
                }
            });	       		        										     			
    }); 
});

var fila; //captura la fila, para editar o eliminar

//Actualizar        
$(document).on("click", ".btnEditar", function(){		        
    opcion = 2;//Actualizar
    fila = $(this).closest("tr");	
    IdCliente = parseInt(fila.find('td:eq(0)').text());        
    nombre = fila.find('td:eq(1)').text();
    colonia = fila.find('td:eq(2)').text();
    calle = fila.find('td:eq(3)').text();
    numDomicilio = fila.find('td:eq(4)').text();
    telefono = fila.find('td:eq(5)').text();
    nummascotas = fila.find('td:eq(6)').text();
    $("#nombre").val(nombre);
    $("#colonia").val(colonia);
    $("#calle").val(calle);
    $("#numDomicilio").val(numDomicilio);
    $("#telefono").val(telefono);
    $("#nummascotas").val(nummascotas);
    Actulizar();
});

function Actulizar(){
    $('#formPersonas').submit(function(e){       
        e.preventDefault();             
        nombre = $.trim($('#nombre').val());    
        colonia = $.trim($('#colonia').val());
        calle = $.trim($('#calle').val());    
        numDomicilio = $.trim($('#numDomicilio').val());    
        telefono = $.trim($('#telefono').val());
        numMascotas = $.trim($('#nummascotas').val());                           
            $.ajax({
              url: "./php/JsGrid.php",
              type: "POST",
              datatype:"json",    
              data:  {IdCliente:IdCliente,nombre:nombre,colonia:colonia,calle:calle, numDomicilio:numDomicilio, telefono:telefono, nummascotas:numMascotas,opcion:opcion},    
              success: function(data) {
                tablaPersona.ajax.reload(null, false);
               }
            });
            Swal.fire({
                icon:'success',
                title:'¡Datos Actualizados Correctamente!',
            });		        									     			
        }
    ); 
  }

//Eliminar
$(document).on("click", ".btnBorrar", function(){
    fila = $(this);           
    IdCliente = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;		
    opcion = 3; //eliminar
    var respuesta = confirm("¿Está seguro de borrar el registro "+IdCliente+"?");                
    if (respuesta) {            
        $.ajax({
          url: "./php/JsGrid.php",
          type: "POST",
          datatype:"json",    
          data:  {opcion:opcion,IdCliente:IdCliente},    
          success: function() {
              tablaPersona.row(fila.parents('tr')).remove().draw();  
              Swal.fire({
                icon:'success',
                title:'¡Datos Eliminados!',
            });               
           }
        });	
    }
 });

});