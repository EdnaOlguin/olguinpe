$('#Formulario').submit(function(e){
   e.preventDefault();

   var usuario = $.trim($("#usuario").val());    
   var contrasena =$.trim($("#contrasena").val()); 

   if(usuario.length == "" || contrasena == ""){
      Swal.fire({
          icon:'error',
          title:'Debe ingresar un usuario y/o password',
      });
      return false; 
    }else{
        $.ajax({
           url:"./php/Login.php",
           type:"POST",
           datatype: "json",
           data: {usuariophp:usuario, contrasenaphp:contrasena}, 
           success:function(data){               
               if(data == "null"){
                   Swal.fire({
                       icon:'error',
                       title:'Usuario y/o password incorrecta',
                   });
               }else{
                   Swal.fire({
                       icon:'success',
                       title:'¡Conexión exitosa!',
                       confirmButtonColor:'#3085d6',
                       confirmButtonText:'Ingresar'
                   }).then((result) => {
                       if(result.value){
                           window.location.href = "Home.php";
                       }
                   })
                   
               }
           }    
        });
    }     
});