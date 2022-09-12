<?php

require "Conexao/config.php";
require "Classes/Agenda.php";

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
<body class="vh-100">
    <section class="gradient-custom bg-primary">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-light text-dark" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-5 ">
                            <h2 class="fw-bold mb-2 text-uppercase">Procura</h2>
                            <form method="post" action="">
                <h4>Digite o indicador</h4>
                <p>
                    <input style="border-radius: 10px;border: hidden; padding: 5px; text-align: center;" type="text" name="id" />
                    <button class="btn btn-outline-dark btn-lg px-5" style="margin-top: 20px;">Procurar</button>
                </p>
                <a href="index.php" class="btn btn-outline-dark btn-lg px-5" style="margin-top: 20px; margin-bottom: 60px;">Voltar</a>
            </form>
            <h3>
            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST')
            
                    {
                        $a = new Agenda($mysql);
                        $b = $a -> agruparID();
                        $c = $a ->separar($b);
                        if(in_array($_POST['id'],$c)){
                            $artigos = $a ->pesquisar($a);
                        }else{
                            if($_POST['id'] == null){
                                error_reporting(0);
                                echo "Digite um indicador";
                            }else{
                                echo "Digite um indicador válido";
                            }
                        }
                        
                    }?>
                   
            </h3>
            
            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'){ if(in_array($_POST['id'],$c)){?>
                <a  href="excluir.php?id=<?php echo $_POST['id']; ?> " class="btn btn-outline-dark btn-lg px-5" >Excluir</a> 
                <a   href="editar.php?id=<?php  echo $_POST['id'];?>" class="btn btn-outline-dark btn-lg px-5" >Editar</a><?php }}?>

        </div>
    </div>  
        </form>
        </div>
    </div>
</body>
</html>