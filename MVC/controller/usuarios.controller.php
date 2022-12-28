<?php
class usuarioController{

    public static function login(){
        
        $resp = usuarioModel::obtenerUsuario($_POST['user'],$_POST['pass']);
        print_r($resp);
        if(empty($resp)==1){
            echo 
            "<script>
            Swal.fire({
                title: 'error',
                text: 'usuario o contraseña incorecta',
                icon: 'error',
                showCancelButton: false,
                allowOutsideClick: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'volver'
              }).then((result) => {
                if (result.isConfirmed) {
                  window.location.href='servicio';
                }
              })
             </script>";
            
            
            
        }else{
            if($resp['estado']==1){
                $_SESSION['sesion']=true;
                $_SESSION['usuario']=$resp['usuario'];
                echo '<script> 
                         window.location.href="servicio";
                </script>';
            }else{
                echo '<script> 
                alert(" no se pudo logear, usuario suspendido");
                    window.location.href="servicio";
                </script>';
            }
            print_r($resp);
        }
        
    }

    static public function crear_persona(){
        $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];
    
    $crea=[$usuario,$contrasena];
        $crear = usuarioModel::crearPersona($crea);
        if ($crear =="oke") {
            
         echo "<script>
         
         Swal.fire({
            title: 'felicitaciones',
            text: 'el usuario se creo correctamente',
            icon: 'success',
            showCancelButton: false,
            allowOutsideClick: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'ir a servicio'
          }).then((result) => {
            if (result.isConfirmed) {
              let url =$('#url').val();
              window.location.href=''+url+'servicio';
            }
          })
         </script>";
    
    
    }
    
    }

}