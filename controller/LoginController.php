<?php


class LoginController{

    public function validate_login(){
        $email = $_POST['email-login'];
        $password= $_POST['password-login'];

        if(empty($email)||empty($password)){
            echo "Preencha todos os campos";
        }else{

        }
    }
}