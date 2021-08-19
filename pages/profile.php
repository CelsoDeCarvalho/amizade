<?php
session_start();
if(!isset($_SESSION['cod_number'])){
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">    <link rel="stylesheet" href="../css/profile.css">
    <title>Amizade</title>
</head>
<body>

<div class="container-fluid py-4 h-100 profile">
    <button style="background-color: #2492C9" class="btn btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <i class='bx bx-menu' style="background-color: #2492C9;font-size: 20px"></i>
    </button>

    <div class="row" id="user-list">
    </div>

    <!-- Modal do chat-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-chats">
                <div class="modal-header">
                    <div class="perfil-area d-flex">
                        <img src="../images/A-CIÊNCIA-REVELA-O-QUE-A-FOTO-DO-SEU-PERFIL-DIZ-SOBRE-A-SUA-PERSONALIDADE.jpg" style="margin-right: 10px">
                        <div>
                            <h6 style="margin-bottom: 0;font-size: 14px">Celso Momade Octaviano</h6>
                            <span class="text-muted" style="font-size: 11px">online <i class='bx bxs-circle' style="color: forestgreen"></i></span>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body area-chats">
                    <div class="msg-send">
                        <div class="message">
                            <p><?php echo $_GET['user_id']?></p>
                        </div>
                    </div>

                    <div class="msg-receive">
                        <img src="../images/A-CIÊNCIA-REVELA-O-QUE-A-FOTO-DO-SEU-PERFIL-DIZ-SOBRE-A-SUA-PERSONALIDADE.jpg">
                        <div class="message">
                            <p>Olamundosdscsdcsddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>
                        </div>
                    </div>
                    <div class="msg-send">
                        <div class="message">
                            <p>Olamundosdscsdcsddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>
                        </div>
                    </div>

                    <div class="msg-receive">
                        <img src="../images/A-CIÊNCIA-REVELA-O-QUE-A-FOTO-DO-SEU-PERFIL-DIZ-SOBRE-A-SUA-PERSONALIDADE.jpg">
                        <div class="message">
                            <p>Olamundosdscsdcsddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>
                        </div>
                    </div>
                    <div class="msg-send">
                        <div class="message">
                            <p>Olamundosdscsdcsddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>
                        </div>
                    </div>

                    <div class="msg-receive">
                        <img src="../images/A-CIÊNCIA-REVELA-O-QUE-A-FOTO-DO-SEU-PERFIL-DIZ-SOBRE-A-SUA-PERSONALIDADE.jpg">
                        <div class="message">
                            <p>Olamundosdscsdcsddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>
                        </div>
                    </div>
                    <div class="msg-send">
                        <div class="message">
                            <p>Olamundosdscsdcsddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>
                        </div>
                    </div>

                    <div class="msg-receive">
                        <img src="../images/A-CIÊNCIA-REVELA-O-QUE-A-FOTO-DO-SEU-PERFIL-DIZ-SOBRE-A-SUA-PERSONALIDADE.jpg">
                        <div class="message">
                            <p>Olamundosdscsdcsddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>
                        </div>
                    </div>
                    <div class="msg-send">
                        <div class="message">
                            <p>Olamundosdscsdcsddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>
                        </div>
                    </div>

                    <div class="msg-receive">
                        <img src="../images/A-CIÊNCIA-REVELA-O-QUE-A-FOTO-DO-SEU-PERFIL-DIZ-SOBRE-A-SUA-PERSONALIDADE.jpg">
                        <div class="message">
                            <p>Olamundosdscsdcsddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>
                        </div>
                    </div>
                    <div class="msg-send">
                        <div class="message">
                            <p>Olamundosdscsdcsddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>
                        </div>
                    </div>

                    <div class="msg-receive">
                        <img src="../images/A-CIÊNCIA-REVELA-O-QUE-A-FOTO-DO-SEU-PERFIL-DIZ-SOBRE-A-SUA-PERSONALIDADE.jpg">
                        <div class="message">
                            <p>Olamundosdscsdcsddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>
                        </div>
                    </div>
                    <div class="msg-send">
                        <div class="message">
                            <p>Olamundosdscsdcsddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>
                        </div>
                    </div>

                    <div class="msg-receive">
                        <img src="../images/A-CIÊNCIA-REVELA-O-QUE-A-FOTO-DO-SEU-PERFIL-DIZ-SOBRE-A-SUA-PERSONALIDADE.jpg">
                        <div class="message">
                            <p>Olamundosdscsdcsddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="justify-content: flex-start">
                    <form class="w-100">
                        <div  style="margin-right: 5px;width: 100%" class="d-flex">
                            <input style="margin-right: 5px" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="mensagem...">
                            <button type="submit" class="btn"><i class='bx bx-send'></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <button  type="button" class="btn-close text-reset ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="card card-profile">


                <?php
                include_once "../connection/ConnectionFactory.php";
                $connection = ConnectionFactory::connector();
                $query = $connection->query("SELECT * FROM user WHERE cod_number = {$_SESSION['cod_number']}");
                if ($query->rowCount()>0){
                    $row = $query->fetch(PDO::FETCH_ASSOC);
                }
                ?>

                <img src="../fotos_perfil/<?php echo $row['image']?>" alt="<?php echo $row['nickname']?>" style="width:100%">
                <div class="container-fluid">


                    <div>
                        <button class="btn"><i class='bx bx-image'></i> <span>Alterar foto</span></button>
                        <h3 style="margin-bottom: 0"><?php echo $row['nickname']?></h3>
                        <span class="text-muted" style="font-size: 11px;margin-top: 0"><?php echo $row['email']?></span><br>
                        <div style="display: flex;flex-direction: column">
                            <span style="font-size: 11px">Provincia: <?php echo $row['state']?></span>
                            <span style="font-size: 11px">Nascido em: <?php echo $row['birth_date']?></span>
                            <span style="font-size: 11px">Genero: <?php echo $row['genre']?></span>
                        </div>

                        <div class="bio" style="margin-top: 30px">
                            <p style="font-size: 11px">Esta e a minha biografia</p>
                        </div>
                    </div>
                    <div style="margin: 24px 0;white-space: normal">
                        <button class="btn"><i class='bx bx-message'></i><span>Chats</span></button>
                        <button class="btn"><i class='bx bx-user'></i> <span>Actualizar perfil</span></button>
                        <button class="btn"><i class='bx bx-info-square'></i><span>Alterar bio</span></button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<script src="../js/users.js"></script>
</body>
</html>