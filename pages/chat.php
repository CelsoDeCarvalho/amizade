<?php
session_start();
if (!isset($_SESSION['cod_number'])) {
    header("location:../../amizade");
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/chat.css">
    <title>Amizade</title>
</head>
<body>

<div class="container chat">

    <?php
    include_once "../connection/ConnectionFactory.php";
    $connection = ConnectionFactory::connector();
    $user_id = $_GET['user_id'];
    $query = $connection->query("SELECT * FROM user WHERE cod_number = {$user_id}");
    if($query->rowCount()>0){
        $row = $query->fetch(PDO::FETCH_ASSOC);
    }
    ?>

    <div class="header">
        <img src="../fotos_perfil/<?php $row['image']?>">
        <div>
            <h6 style="margin: 0"><?php echo $row['nickname']?></h6>
            <span class="text-muted" style="font-size: 11px"><?php echo $row['status']?><i
                        style="margin-left: 3px;font-size: 9px;color:#0EC143 " class='bx bxs-circle'></i></span>
        </div>
    </div>

    <div class="body">
        <div class="chat-area" id="chat-box">

        </div>
    </div>

    <div class="footer">
        <form class="d-flex w-100 px-3" id="message-form">
            <input type="text" name="sender-ms" value="<?php echo $_SESSION['cod_number']?>" hidden>
            <input type="text" name="receiver-ms" value="<?php echo $user_id?>" hidden>
            <input type="text" name="message" class="form-control" id="text-message" aria-describedby="emailHelp"
                   placeholder="mensagem...">
            <button type="submit" id="send-btn" class="btn btn-enviar"><i class='bx bx-send'></i></button>
        </form>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/"
        crossorigin="anonymous"></script>
<script src="../js/chats.js"></script>
</body>
</html>