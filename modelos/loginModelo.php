<?php

require_once "modeloPrincipal.php";

    class loginModelo extends modeloPrincipal{

        protected static function iniciar_sesion_modelo($datos){
            $sql=modeloPrincipal::conectar()->prepare("SELECT * FROM usuario WHERE usuario_usuario=:Usuario
                AND usuario_clave=:Clave AND usuario_estado='Activa'");
            $sql->bindParam(":Usuario",$datos['Usuario']);
            $sql->bindParam(":Clave",$datos['Clave']);
            $sql->execute();
            return $sql;
        }
    }

