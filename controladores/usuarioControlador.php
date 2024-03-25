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
            if($dni=="" || $nombre=="" || $apellido=="" || 
            $usuario=="" || $clave1=="" || $clave2==""){
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error inesperado",
                    "Texto"=>"No has llenado todos los campos obligatorio",
                    "icon"=>"error"
                ];
                echo json_encode($alerta);
                exit();
            }

            /** comprobar campos*/
            if(modeloPrincipal::verificar_datos("[0-9\-]{1,20}", $dni)){
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error inesperado",
                    "Texto"=>"La cedula ingresada no es valido",
                    "icon"=>"error"
                ];
                echo json_encode($alerta);
                exit();
            }
            if(modeloPrincipal::verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}", $nombre)){
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error inesperado",
                    "Texto"=>"El nombre ingresado no es valido",
                    "icon"=>"error"
                ];
                echo json_encode($alerta);
                exit();
            }
            if(modeloPrincipal::verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}", $apellido)){
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error inesperado",
                    "Texto"=>"El apellido ingresado no es valido",
                    "icon"=>"error"
                ];
                echo json_encode($alerta);
                exit();
            }
            if($telefono!=""){if(modeloPrincipal::verificar_datos("[0-9\(\)+]{8,20}", $telefono)){
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error inesperado",
                    "Texto"=>"El telefono ingresado no es valido",
                    "icon"=>"error"
                    ];
                    echo json_encode($alerta);
                    exit();
                }
            }
            if(modeloPrincipal::verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}", $direccion)){
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error inesperado",
                    "Texto"=>"El usuario no es valido",
                    "icon"=>"error"
                ];
                echo json_encode($alerta);
                exit();
            }
            if(modeloPrincipal::verificar_datos("[a-zA-Z0-9]{1,35}", $usuario)){
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error inesperado",
                    "Texto"=>"El usuario no es valido",
                    "icon"=>"error"
                ];
                echo json_encode($alerta);
                exit();
            }
            if(modeloPrincipal::verificar_datos("[a-zA-Z0-9$@.\-]{7,100}", $clave1) || 
                                modeloPrincipal::verificar_datos("[a-zA-Z0-9$@.\-]{7,100}", $clave2)){
                    $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error inesperado",
                    "Texto"=>"Las contraseñas ingresadas no son validas",
                    "icon"=>"error"
                    ];
                    echo json_encode($alerta);
                    exit();
                }

                /** comprobando Cedula */
            $check_dni=modeloPrincipal::ejecutar_consulta_simple("SELECT usuario_dni FROM usuario
                        WHERE usuario_dni = '$dni'");
            if($check_dni->rowCount()>0){
                $alerta=[
                        "Alerta"=>"simple",
                        "Titulo"=>"Ocurrio un error inesperado",
                        "Texto"=>"La cedula ingresada ya existe en el sistema",
                        "icon"=>"error"
                    ];
                    echo json_encode($alerta);
                    exit();
            }
            /** comprobando nombre de usuario */
            $check_user=modeloPrincipal::ejecutar_consulta_simple("SELECT usuario_usuario FROM usuario
                            WHERE usuario_usuario = '$usuario'");
            if($check_user->rowCount()>0){
                    $alerta=[
                        "Alerta"=>"simple",
                        "Titulo"=>"Ocurrio un error inesperado",
                        "Texto"=>"El nombre de usuario ingresado ya existe en el sistema",
                        "icon"=>"error"
                    ];
                    echo json_encode($alerta);
                    exit();
            }
            /** comprobando email */
            if($email!=""){
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                    /** comprobando nombre de usuario */
                    $check_email=modeloPrincipal::ejecutar_consulta_simple("SELECT usuario_email FROM usuario
                                    WHERE usuario_email = '$email'");
                    if($check_email->rowCount()>0){
                            $alerta=[
                                "Alerta"=>"simple",
                                "Titulo"=>"Ocurrio un error inesperado",
                                "Texto"=>"El email ingresado ya existe en el sistema",
                                "icon"=>"error"
                            ];
                            echo json_encode($alerta);
                            exit();
                    }   
            }else{
                    $alerta=[
                        "Alerta"=>"simple",
                        "Titulo"=>"Ocurrio un error inesperado",
                        "Texto"=>"El email ingresado no es valido",
                        "icon"=>"error"
                    ];
                    echo json_encode($alerta);
                    exit();
                }
            }
            $modelo = new modeloPrincipal();
            if($clave1!=$clave2){
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error inesperado",
                    "Texto"=>"Las contraseñas ingresadas no coinciden",
                    "icon"=>"error"
                ];
                echo json_encode($alerta);
                exit();
            }else{
                $clave= $modelo ->encryption($clave1);
            }
            if($privilegio<1 || $privilegio>3){
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error inesperado",
                    "Texto"=>"El privilegio seleccionado no es valido",
                    "icon"=>"error"
                ];
                echo json_encode($alerta);
                exit();
            }  
            
            $datos_usuario_reg=[
                "DNI"=>$dni,
                "Nombre"=>$nombre,
                "Apellido"=>$apellido,
                "Telefono"=>$telefono,
                "Direccion"=>$direccion,
                "Email"=>$email,
                "Usuario"=>$usuario,
                "Clave"=>$clave,
                "Estado"=>"Activa",
                "Privilegio"=>$privilegio
            ];

            $agregar_usuario=usuarioModelo::agregar_usuario_modelo($datos_usuario_reg);

            if($agregar_usuario->rowCount()==1){
                $alerta=[
                    "Alerta"=>"limpiar",
                    "Titulo"=>"Usuario Registrado",
                    "Texto"=>"Se registro el usuario correctamente",
                    "icon"=>"success"
                ];
            }else{
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error inesperado",
                    "Texto"=>"El privilegio seleccionado no es valido",
                    "icon"=>"error"
                ];
            }
            echo json_encode($alerta);
        } /*fin del controlador */
    } 