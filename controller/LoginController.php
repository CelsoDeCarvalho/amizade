<?php
require_once '../connection/ConnectionFactory.php';
session_start();

class LoginController{

    public function validate_login(){
        $email = $_POST['email-login'];
        $password= $_POST['password-login'];

        if(empty($email)||empty($password)){
            echo "Preencha todos os campos";
        }else{
            $connection =ConnectionFactory::connector();
            $query = $connection->query("SELECT * FROM user WHERE email = '{$email}' and pass='{$password}'");
            if($query->rowCount()>0){
                $row = $query->fetch(PDO::FETCH_ASSOC);
                $_SESSION['cod_number'] = $row['cod_number'];
                echo "Sucesso";
            }else{
                echo "Email ou password invalido";
            }
        }
    }
}

$loginController = new LoginController();
$loginController->validate_login();

?>