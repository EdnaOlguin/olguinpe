
$(document).ready(function () {

    $('#btnEnviar').click(botonIniciarSesion)
       
    function botonIniciarSesion() {
    
        var vUsuario= $('#Usuario').val();
        var vContraseña= $('#Contraseña').val();
    
        if((vUsuario =='Usuario1' && vContraseña =='1234') || (vUsuario =='Usuario2' && vContraseña =='5678')){
            console.log('login correcto');
            
            $('#myModal .modal-header').addClass('modal-header-success');
            $('#myModal .modal-header h3').text('Bienvenid@ '+ vUsuario);
            $('#myModal .modal-body p').text('Usuario y Contraseña correctos');
            $('#myModal').modal();
    
            $("#myModal").on('shown.bs.modal',function(){
                $('#btnCerrar').focus();
            });

            $("#myModal").on('hidden.bs.modal',function(){
                $('#myModal .modal-header').removeClass('modal-header-success');
            })
        }
        else{
            console.log('login incorrecto');
                       
            $('#myModal .modal-header').addClass('modal-header-danger');
            $('#myModal .modal-header h3').text('Acceso denegado');
            $('#myModal .modal-body p').text('Usuario y/o Contraseña Incorrecto');
            $('#myModal').modal();

            $("#myModal").on('shown.bs.modal',function(){
                $('#btnCerrar').focus();
            });

            $("#myModal").on('hidden.bs.modal',function(){
                $('#myModal .modal-header').removeClass('modal-header-success');
            })
    
        }
    }
    
    });
