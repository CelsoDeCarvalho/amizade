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
                     echo "Email ja existe";
                 }else{
                     if(isset($_FILES['image'])){
                         $image_name =  $_FILES['image']['name'];
                         $image_type =  $_FILES['image']['type'];
                         $image_tmp_name =  $_FILES['image']['tmp_name'];

                         $img_xplode = explode('.',$image_name);
                         $img_ext = end($img_xplode);

                         $extension = ['PNG','png','JPEG','JPG','gif','jpeg','jpg'];

                         if(in_array($img_ext,$extension)==true){
                             $time = time();
                             $new_image_name = $time.$image_name;
                             if(move_uploaded_file($image_tmp_name,"../fotos_perfil/".$new_image_name)){
                                 $statu = "online";

                                 $user = new User($nickname,$email,$password,$genre,$state,$birth_date,$new_image_name,$statu);
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
                             echo "Escolha um ficheiro do tipo foto";
                         }
                     }else{
                         echo "Djo, escolha uma imagem pro perfil";
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