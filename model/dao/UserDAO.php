<?php
require_once "../connection/ConnectionFactory.php";

class UserDAO{

    public function add(User $user){
        $querry="INSERT INTO user(nickname,email,pass,state,genre,birth_date) 
         VALUES (:nickname,:email,:pass,:state,:genre,:birth_date)";

        try{
            $connection = ConnectionFactory::connector()->prepare($querry);

            $connection->bindValue(":nickname",$user->getNickname());
            $connection->bindValue(":email",$user->getEmail());
            $connection->bindValue(":pass",$user->getPassword());
            $connection->bindValue(":state",$user->getState());
            $connection->bindValue(":genre",$user->getGenre());
            $connection->bindValue(":birth_date",$user->getBirthDate());

            return $connection->execute();

        }catch (Exception $e){
            return 'Erro '.$e->getMessage();
        }
    }

}

?>