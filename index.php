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
    <link rel="stylesheet" href="css/index.css">
    <title>Amizade</title>
</head>

<body>

<section class="init-section">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <span class="navbar-brand m-0 me-auto h1"><i class='bx bx-hash'></i>AMIZADE</span>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                   aria-expanded="false">
                    <i class='bx bxs-grid'></i>
                </a>
                <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item text-muted" data-bs-toggle="modal" data-bs-target="#staticBackdrop"  href="#"><i class='bx bxs-log-in' style="margin-right: 4px"></i>Entrar</a></li>
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

<!-- Modal Login-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-login">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Efetue o login</h5>
            </div>
            <div class="modal-body">
                <div class="row d-flex justify-content-center">
                    <div class="col-8">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>

                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
<script src="js/index.js">
</script>
</body>
</html>