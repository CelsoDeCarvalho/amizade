<?php

require_once '../model/bean/User.php';
require_once '../model/dao/UserDAO.php';
require_once '../connection/ConnectionFactory.php';
session_start();

class UserController{

    public function user_validate(){

         $nickname = $_POST['nickname'];
         $email = $_POST['email'];
         $password = $_POST['password'];
         $genre = $_POST['genre'];
         $state = $_POST['state'];
         $birth_date = $_POST['birth_date'];

         if(empty($nickname)||empty($email)||empty($password)||empty($genre)||empty($state)||empty($birth_date)){
             echo "Preencha todos os campos";
         }else{
             if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                 $connection = ConnectionFactory::connector();
                 $row = $connection->query("SELECT email FROM user WHERE email = '{$email}' OR nickname='{$nickname}'");
                 if($row->rowCount()>0){
                     echo "Email ou nickname ja existe";
                 }else{
                     $user = new User($nickname,$email,$password,$genre,$state,$birth_date);
                     $userDao = new UserDAO();
                     $inserted = $userDao->add($user);
                     if($inserted){
                         $querry = $connection->query("SELECT * FROM user WHERE email = '{$email}'");
                         if($querry->rowCount()>0){
                             $row = $querry->fetch(PDO::FETCH_ASSOC);
                             $_SESSION['cod_number'] = $row['cod_number'];
                             echo "Sucesso";
                         }
                     }else{
                         echo "Algo correu mal";
                     }
                 }
             }else{
                 echo "Email invalido";
             }
         }

    }
}

$validar = new UserController();
$validar->user_validate();

?>