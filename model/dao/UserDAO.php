<?php
require_once "../connection/ConnectionFactory.php";

class UserDAO{

    public function add(User $user){
        $querry="INSERT INTO user(nickname,email,pass,state,genre,birth_date,status,image) 
         VALUES (:nickname,:email,:pass,:state,:genre,:birth_date,:statu,:image)";

        try{
            $connection = ConnectionFactory::connector()->prepare($querry);

            $connection->bindValue(":nickname",$user->getNickname());
            $connection->bindValue(":email",$user->getEmail());
            $connection->bindValue(":pass",$user->getPassword());
            $connection->bindValue(":state",$user->getState());
            $connection->bindValue(":genre",$user->getGenre());
            $connection->bindValue(":birth_date",$user->getBirthDate());
            $connection->bindValue(":statu",$user->getStatu());
            $connection->bindValue(":image",$user->getImage());

            return $connection->execute();

        }catch (Exception $e){
            return 'Erro '.$e->getMessage();
        }
    }

    public static function readAll(){
        $connection = ConnectionFactory::connector();
        $query = $connection->query("SELECT * FROM user");
        $row = $query->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }

}

?>