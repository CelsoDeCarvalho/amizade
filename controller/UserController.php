<?php

require_once ('model/bean/User.php');
class UserController{

    public function user_validate(){
        $user = new User();

        $user->setNickname($_POST['nickname']);
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        $user->setBirthDate($_POST['birth_date']);
        $user->setGenre($_POST['genre']);
        $user->setState($_POST['state']);
    }
}

?>