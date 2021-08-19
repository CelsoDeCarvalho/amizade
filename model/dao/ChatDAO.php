<?php
require_once "../connection/ConnectionFactory.php";

class ChatDAO{

    public function add(Chat $chat){
        $querry="INSERT INTO chat(sender,receiver,message) 
         VALUES (:sender,:receiver,:message)";

        try{
            $connection = ConnectionFactory::connector()->prepare($querry);

            $connection->bindValue(":sender",$chat->getSender());
            $connection->bindValue(":receiver",$chat->getReceiver());
            $connection->bindValue(":message",$chat->getMessage());


            return $connection->execute();

        }catch (Exception $e){
            return 'Erro '.$e->getMessage();
        }
    }

    public static function readAll(){
        $connection = ConnectionFactory::connector();
        $query = $connection->query("SELECT * FROM chat");
        $row = $query->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }

}
?>