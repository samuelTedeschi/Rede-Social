<?php

    namespace RedeSocial\Models;

    class UsuarioModel{

        public static function emailExists($email){
            $pdo = \RedeSocial\MySql::connect();
            $verificar = $pdo->prepare("SELECT email FROM usuario WHERE email = ?");
            $verificar->execute(array($email));

            if($verificar->rowCount() == 1){
                //email existe
                return true;
            }else{
                return false;
            }
        }
    }
?>