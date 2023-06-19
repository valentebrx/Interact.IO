<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Interact.IO</title>
</head>

<body>

    <?php
    include('protect.php');
    ?>


    <nav class="navbar bg-primary text-white justif">
        <div class="container-fluid ">
            <a class="navbar-brand text-white" href="#">
                <img src="https://play-lh.googleusercontent.com/5PKrdFfLewuG3_PYCbKhHulnw2GjmXI5CM-3ixcfioKKl9j2oYIxoCVx-iiKbaArPMTY" alt="Logo" width="30" height="24" class="mx-3 d-inline-block align-text-center rounded-circle">
                Interact.IO
            </a>
            <a class="navbar-brand text-white mx-5" href="logout.php">Sair</a>
        </div>
    </nav>

    <script>
        const queryString = window.location.search
        const urlParams = new URLSearchParams(queryString)
        const page = urlParams.get("page")
        const teste2 = page

        const teste = document.getElementById(teste2)
        teste.classList.add('active')

    </script>


    <div class="conteiner" id="topheader">
        <div class="row">
            <div class="d-flex flex-column  p-3 text-white bg-dark" style="width: 220px; height: 888px;">
                <a href="/" class="mx-3 d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <span class="fs-4">Menu</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li>
                        <a href="?page=dashboard" class="nav-link text-white" id="dashboard">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="?page=dashboard"></use>
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="?page=carteira" class="nav-link text-white carteira">
                            <svg class="bi me-2" width="16" height="16">
                                <use href="?page=carteira"></use>
                            </svg>
                            Carteira
                        </a>
                    </li>
                    <li>
                        <a href="?page=consultar_empresa" class="nav-link text-white">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="?page=consultar_empresa"></use>
                            </svg>
                            Buscar Empresa
                        </a>
                    </li>
                    <li>
                        <a href="?page=listar" class="nav-link text-white">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="?page=listar"></use>
                            </svg>
                            Inadimplêntes
                        </a>
                    </li>
                    <li>
                        <a href="?page=importarExcel" class="nav-link text-white">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="?page=importarExcel"></use>
                            </svg>
                            Importar Clientes
                        </a>
                    </li>
                </ul>
                <hr>
                <div>
                    <a href="#" class="mx-3 d-flex align-items-center text-white text-decoration-none " id="dropdownUser1" aria-expanded="false">
                        <?php
                        $id_usuario = $_SESSION['id'];
                        include "buscarUsuario.php";
                        $dados_usuario = buscarUsuario($id_usuario);
                        ?>
                        <img src="<?php echo $dados_usuario[2] ?>" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong><?php echo $dados_usuario[1] ?></strong>
                    </a>
                </div>
            </div>

            <div class=" col-10">

                <?php
                include("conexao.php");
                switch (@$_REQUEST["page"]) {
                    case "logout":
                        include("logout.php");
                        break;
                    case "carteira":
                        include("carteira.php");
                        break;
                    case "dashboard":
                        include("dashboard.php");
                        break;
                    case "listar";
                        include("listar.php");
                        break;
                    case "salvarEmpresa":
                        include("salvarEmpresa.php");
                        break;
                    case "salvarResponsavel":
                        include("salvarResponsavel.php");
                        break;
                    case "salvarStatus":
                        include("salvarStatus.php");
                        break;
                    case "salvarContato":
                        include("salvarContato.php");
                        break;
                    case "novoContato":
                        include("novoContato.php");
                        break;
                    case "salvarTarefa":
                        include("salvarTarefa.php");
                        break;
                    case "importarExcel":
                        include("importarExcel.php");
                        break;
                    case "consultar_empresa":
                        include("consultar_empresa.php");
                        break;
                    case "detalhesEmpresa":
                        include("detalhes_empresa.php");
                        break;
                    default:
                        include("dashboard.php");
                        break;
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>