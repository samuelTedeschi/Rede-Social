<?php

    namespace RedeSocial;

use Exception;
use PDO;

    class MySql{

        private static $pdo;

        public static function connect(){
            if(self::$pdo == null){
                try{
                    self::$pdo = new PDO('mysql:host=localhost;dbname=rede_social_geral_junto','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                    self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                }catch(Exception $e){
                    echo "erro ao encontrar";
                    error_log($e->getMessage());
                }
            }

            return self::$pdo;
        }
    }
?>