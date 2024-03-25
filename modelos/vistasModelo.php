<?php

    class vistasModelo{

        /** ----------------- Modelo obtener vistas -----------*/
        protected static function obtener_vistas_modelo($vistas){
            $listaBlanca=["home", "client", "clienteList", "clienteBuscar", "producto", "productoList",
                          "productoBuscar", "usuario","usuarioBuscar", "usuarioList", "empresa",
                           "venta", "ventaList", "ventaBuscar"];
            if(in_array($vistas, $listaBlanca)){
                if(is_file("./vistas/contenidos/".$vistas."-view.php")){
                    $contenido = "./vistas/contenidos/".$vistas."-view.php";
                }else{
                    $contenido="404";
                }
            }elseif($vistas=="login" || $vistas=="index"){
                $contenido="login";
            }else{
                $contenido="404";
            }
            return $contenido;
        }
    }