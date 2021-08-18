<?php
session_start();
if(!isset($_SESSION['cod_number'])){
    header("location:");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>Amizade</title>
</head>

<body>

<section class="init-section">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <span class="navbar-brand m-0 me-auto h1"><i class='bx bx-hash'></i>AMIZADE</span>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class='bx bxs-grid'></i>
                </a>
                <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item text-muted" href="#" data-toggle="modal" data-target="#exampleModal"><i class='bx bxs-log-in' style="margin-right: 4px"></i>Entrar</a></li>
                    <li><a class="dropdown-item text-muted" href="#"><i class='bx bxs-cog' style="margin-right: 4px"></i>Definicoes</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item text-muted" href="#"><i class='bx bxs-info-square' style="margin-right: 4px"></i>Sobre o app</a></li>
                </ul>
            </li>
        </div>
    </nav>
</section>

<!-- Modal login-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-login">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Efetue o login</h6>
            </div>
            <div class="modal-body">
                <div class="row d-fle justify-content-center">
                    <div class="col-10">
                        <form method="post" class="mb-3" id="form-login">
                            <div id="caixa-erros-login" style="display: none" class="alert alert-danger texto-erros" role="alert">
                                A simple danger alert—check it out!
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" name="email-login" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="password-login">
                            </div>
                            <button type="submit" id="btn-logar" class="btn btn-primary">Entrar</button>
                        </form>
                        <span style="font-size: 12px">Nao tenho conta!<a style="margin-left: 3px" href="#"  data-dismiss="modal" data-toggle="modal" data-target="#exampleModal1">Registar-se</a></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal cadastro-->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-login">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Cadastre-se</h6>
            </div>
            <div class="modal-body">
                <div class="row d-fle justify-content-center">
                    <div class="col-10">
                        <div id="caixa-erros" style="display: none" class="alert alert-danger texto-erros" role="alert">
                            A simple danger alert—check it out!
                        </div>
                        <form method="post" class="mb-3" id="form-cadastro">
                            <div class="container">
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="username">Nickname</label>
                                        <input type="text" name="nickname" class="form-control" id="username">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="inputState">Genero</label>
                                        <select id="inputState" name="genre" class="form-control">
                                            <option selected></option>
                                            <option>Masculino</option>
                                            <option>Feminino</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="username">Data de nascimento</label>
                                        <input type="date" name="birth_date" class="form-control" id="username">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="inputState">Provincia</label>
                                        <select id="inputState" name="state" class="form-control">
                                            <option selected></option>
                                            <option>Nampula</option>
                                            <option>Maputo</option>
                                            <option>Sofala</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"             aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" id="btn-cadastrar" class="btn btn-primary">Concluir</button>
                        </form>
                        <span style="font-size: 12px">Tenho uma conta!<a style="margin-left: 3px" href="#"  data-dismiss="modal" data-toggle="modal" data-target="#exampleModal">Logar-se</a></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="js/signup.js"></script>
<script src="js/signin.js"></script>
</body>
</html>