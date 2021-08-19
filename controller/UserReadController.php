<?php
include_once "../../amizade/model/dao/UserDAO.php";
session_start();

class UserReadController
{

    public function reader(){
        $output="";
        $users = UserDAO::readAll();
        if (count($users) < 2) {
            $output.= "Nao existem usuarios para conversar no momento";
        } else {
            for ($i = 0; $i < count($users); $i++) {
                if($users[$i]['cod_number']!=$_SESSION['cod_number']){
                    $output.=' 
            <div class="col-sm-12 col-md-4 col-lg-3  mb-3 card-user" >
                    <div class="card p-0" style="width: 18rem">
                    <img src="../fotos_perfil/'.$users[$i]['image'].'" alt="'.$users[$i]['nickname'].'">
                    <div class="card-body">
                    <h5 class="card-title" style="font-size: 16px">'.$users[$i]['nickname'].'<span class="text-muted">15</span> </h5>
                    <p class="card-text text-muted" style="font-size: 12px;margin-bottom: 20px">biografia: Sou uma jovem de 15 anos e adoro comer, pois me faz bem </p>
                    <p class="text-muted" style="font-size: 12px">'.$users[$i]['state'].'</p>
                    <p class="text-muted" style="font-size: 12px">'.$users[$i]['status'].'</p>
                    <a class="btn btn-chat" href="../pages/chat.php?user_id='.$users[$i]['cod_number'].'"><i class="bx bx-message"></i><span> chatar</span></a>
                </div>
                </div>
            </div>';
                }
            }

            return $output;
        }
    }
}

$users = new UserReadController();
echo ($users->reader());