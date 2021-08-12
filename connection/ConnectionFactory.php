<?php

class ConnectionFactory{

    private $username = "root";
    private $password = "";
    private $dns = "mysql:dbname=amizade;host:localhost";

    public function conector(){
        try {
            $pdo = new PDO($this->dns, $this->username, $this->password);
            return "Conectado com sucesso";
        } catch (Exception $e) {
            return "Falha ao conectar. Erro: " . $e->getMessage();
        }
    }

}

?>