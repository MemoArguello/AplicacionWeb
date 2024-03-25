<?php

    if($peticionAjax){
        require_once "../modelos/usuarioModelo.php";
    }else{
        require_once "./modelos/usuarioModelo.php";
    }

    class usuarioControlador extends usuarioModelo {
        
        /*----------------- Controlador para agregar usuario -----------*/    
        public static function agregar_usuario_controlador(){
            $dni=modeloPrincipal::limpiar_cadena($_POST['usuario_dni_reg']);
            $nombre=modeloPrincipal::limpiar_cadena($_POST['usuario_nombre_reg']);
            $apellido=modeloPrincipal::limpiar_cadena($_POST['usuario_apellido_reg']);
            $telefono=modeloPrincipal::limpiar_cadena($_POST['usuario_telefono_reg']);
            $direccion=modeloPrincipal::limpiar_cadena($_POST['usuario_direccion_reg']);

            $usuario=modeloPrincipal::limpiar_cadena($_POST['usuario_usuario_reg']);
            $email=modeloPrincipal::limpiar_cadena($_POST['usuario_email_reg']);
            $clave1=modeloPrincipal::limpiar_cadena($_POST['usuario_clave1_reg']);
            $clave2=modeloPrincipal::limpiar_cadena($_POST['usuario_clave2_reg']);

            $privilegio=modeloPrincipal::limpiar_cadena($_POST['usuario_privilegio_reg']);
            
            /** comprobar campos vacios*/
            if($dni=="" || $nombre=="" || $apellido=="" || $telefono=="" || $direccion=="" ||
            $usuario=="" || $clave1=="" || $clave2==""){
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error inesperado",
                    "Texto"=>"No has llenado todos los campos obligatorio",
                    "Tipo"=>"error"
                ];
                echo json_encode($alerta);
                exit();
            }
        }
    }