<?php
include_once "../connection/ConnectionFactory.php";
session_start();
class ChatReader{

    public function reader(){


        if(isset($_SESSION['cod_number'])){
            $sender = $_POST['sender-ms'];
            $receiver= $_POST['receiver-ms'];
            $message = $_POST['message'];
            $output="";

            $sql = "SELECT * FROM chat LEFT JOIN user ON user.cod_number = chat.receiver
           WHERE (sender = {$sender} AND receiver = {$receiver}) OR 
            (sender = {$receiver} AND receiver = {$sender}) ORDER BY id_chat";

            $connection = ConnectionFactory::connector();
            $query = $connection->query($sql);
            $row = $query->fetchAll(PDO::FETCH_ASSOC);

            for($i=0;$i<count($row);$i++){
                if ($row[$i]['sender']==$sender){
                    $output .='
                      <div class="msg-send">
                      <div class="mensagem">
                      <p>'.$row[$i]['message'].'</p>
                      </div>
                      </div>
                    ';
                }else{
                    $output .='
                       <div class="msg-receive">
                       <img src="../fotos_perfil/'.$row[$i]['image'].'?>" alt="'.$row[$i]['nickname'].'">
                       <div class="mensagem">
                       <p>'.$row[$i]['message'].'</p>
                       </div>
                       </div>
                    ';
                }
            }

            echo $output;
        }

    }

}

$reader = new ChatReader();
echo $reader->reader();

?>