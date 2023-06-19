<?php

if (isset($_POST['email']) || isset($_POST['senha'])) {

    if (strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $conn = new PDO('sqlite:banco/vend.db');
        $sql = "SELECT * from usuario  WHERE email='$email' AND senha = '$senha'";
        $res = $conn->query($sql);

        $id_usuario = $res->fetchColumn(0);
        $nome = $res->fetchColumn(1);

        if ($id_usuario > 0) {
            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $id_usuario;

            header("Location: painel.php");
        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Muhamad Nauval Azhar">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="This is a login page template based on Bootstrap 5">
    <title>InteractIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center my-5">
                        <img src="https://images.g2crowd.com/uploads/product/image/social_landscape/social_landscape_ec6c46167e965e4562ac9499aabaf516/interactio.png" alt="logo" width="100">
                    </div>
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            <h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
                            <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">E-Mail</label>
                                    <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                                    <div class="invalid-feedback">
                                        Email is invalid
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="mb-2 w-100">
                                        <label class="text-muted" for="senha">senha</label>
                                        <a href="#" class="float-end">
                                            Esqueceu a senha?
                                        </a>
                                    </div>
                                    <input id="senha" type="password" class="form-control" name="senha" required>
                                    <div class="invalid-feedback">
                                        Senha necessária
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <button type="submit" class="btn btn-primary ms-auto">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                               Não tem conta? <a href="#" class="text-dark">Contatar Administrador</a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5 text-muted">
                        Copyright &copy; 2023 &mdash; Interact.IO
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/login.js"></script>
</body>

</html>