<?php
    if($peticionAjax){
        require_once "../modelos/loginModelo.php";
    }else{
        require_once "./modelos/loginModelo.php";
    }

    class loginControlador extends loginModelo{

        /*-------------------- Controlador Iniciar Sesion ----------------------- */
        public function iniciar_sesion_controlador(){
            $usuario = modeloPrincipal::limpiar_cadena($_POST["usuario_log"]);
            $clave = modeloPrincipal::limpiar_cadena($_POST["clave_log"]);

        /*-------------------- Controlador Iniciar Sesion ----------------------- */
        
        if ($usuario == "" || $clave == ""){
            echo '<script> 
            Swal.fire({
                icon: "error",
                title: "Ocurrio un error inesperado",
                text:"No relleno todos los campos",
                confirmButtonText: "Aceptar"
              });
            </script>';
            exit();
        }
            /** comprobar campos*/
                if(modeloPrincipal::verificar_datos("[a-zA-Z0-9]{1,35}", $usuario)){
                    echo '<script> 
                    Swal.fire({
                        icon: "error",
                        title: "Ocurrio un error inesperado",
                        text: "El nombre de usuario no es valido",
                        confirmButtonText: "Aceptar"
                      });
                    </script>';
                    exit();
                }
                if(modeloPrincipal::verificar_datos("[a-zA-Z0-9$@.\-]{7,100}", $clave)){
                    echo '<script> 
                    Swal.fire({
                        icon: "error",
                        title: "Ocurrio un error inesperado",
                        text: "La contraseña ingresada no es valido",
                        confirmButtonText: "Aceptar"
                      });
                    </script>';
                    exit();
                }

                $clave = modeloPrincipal::encryption($clave);

                $datos_login=[
                    "Usuario"=> $usuario,
                    "Clave"=> $clave
                ];

                $datos_cuentas=loginModelo::iniciar_sesion_modelo($datos_login);

                if($datos_cuentas->rowCount()==1){	
                    $row=$datos_cuentas->fetch();

                    session_start(['name'=>'SPM']);

                    $_SESSION['id_spm']=$row['usuario_id'];
                    $_SESSION['nombre_spm']=$row['usuario_nombre'];
                    $_SESSION['apellido_spm']=$row['usuario_apellido'];
                    $_SESSION['usuario_spm']=$row['usuario_usuario'];
                    $_SESSION['privilegio_spm']=$row['usuario_privilegio'];
                    $_SESSION['token_spm']=md5(uniqid(mt_rand(),true));

                    return header("Location: ". SERVERURL."home/");
                }else{
                    echo '<script> 
                    Swal.fire({
                        icon: "error",
                        title: "Ocurrio un error inesperado",
                        text: "Error al ingresar",
                        confirmButtonText: "Aceptar"
                      });
                    </script>';
                }
        }
        /*-------------------- Termina Controlador Iniciar Sesion ----------------------- */
        /*-------------------- Controlador forzar cierre Sesion ----------------------- */

}