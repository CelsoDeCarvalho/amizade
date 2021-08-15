<?php

class ConnectionFactory{

    private static $instance;

    public static function connector(){

        try {
            self::$instance = new PDO("mysql:dbname=amizade;host:localhost","root","");
            self::$instance->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS,
                PDO::NULL_EMPTY_STRING);
        } catch (Exception $e) {
            return "Falha ao conectar. Erro: " . $e->getMessage();
        }

        return self::$instance;
    }
}

?>
