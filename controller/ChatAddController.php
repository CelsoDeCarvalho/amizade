<?php
require_once '../../amizade/model/bean/Chat.php';
require_once '../../amizade/model/dao/ChatDAO.php';

class ChatAddController{

    public function addChat(){

        $sender = $_POST['sender-ms'];
        $receiver= $_POST['receiver-ms'];
        $message = $_POST['message'];

        if(!empty($message)){
            $chat = new Chat($sender,$receiver,$message);
            $chatDAO = new ChatDAO();
            $chatDAO->add($chat);
            return $chatDAO;
        }
    }
}
$chat = new ChatAddController();
echo $chat->addChat();
?>