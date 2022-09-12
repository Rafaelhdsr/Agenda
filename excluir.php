<?php

require "Conexao/config.php";
require "Classes/Agenda.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $artigo = new Agenda($mysql);
    $artigo->excluir($_POST['id']);
    header('Location: /Webagenda/index.php');
    die();

    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <section class="vh-100 gradient-custom bg-primary">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-light text-dark" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-5 ">
                            <h2 class="fw-bold mb-2 text-uppercase">Excluir</h2>
                            <form method="post" action="">
                <h4>Deseja excluir o compromisso?</h4>
                <p>
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
                    <button class="btn btn-outline-dark btn-lg px-5" style="margin-top: 20px;">Excluir</button>
                </p>
                <a href="index.php" class="btn btn-outline-dark btn-lg px-5" style="margin-top: 20px;">Voltar</a>
            </form>
        </div>
    </div>  
        </form>
        </div>
    </div>
</body>
</html>