<?php

require "Conexao/config.php";
require "Classes/Agenda.php";

$artigo = new Agenda($mysql);
$artigos = $artigo -> exibirTodos();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<section class=" bg-primary">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-light text-dark" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5 ">
              <h2 class="fw-bold mb-2 text-uppercase">Agenda</h2>
              <h8 class="fw-bold mb-2 text-uppercase"> os indicadores estão entre parênteses</h8>
              <?php foreach($artigos as $art){?>
              <div class="border" style="margin-top: 15px; border-radius: 10px;">
              <p class="text-white-50 mb-5"></p>
              <div class="form-outline form-white mb-4">
                <a style="text-decoration: none;" href="onecard.php?id=<?php echo $art['id'];?>" 
                class="form-label text-dark" for="typeEmailX">
                <?php echo "(",$art['id'],") ", $art['horario'];?></a>
              </div>

              <div class="form-outline form-white mb-4">

                <label class="form-label" for="typePasswordX"><?php echo$art['conteudo'];?></label>
              </div>

              <a href="editar.php?id=<?php echo $art['id'];?>" class="btn btn-outline-dark btn-lg px-5" type="submit">Editar</a>
              <a href="excluir.php?id=<?php echo $art['id'];?>" class="btn btn-outline-dark btn-lg px-5" type="submit">Excluir</a>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>
              </div>
            <?php }?>
            </div>

            <div>
            <a href="procura.php" class="btn btn-outline-dark btn-lg px-5" type="submit">Pesquisar</a>
              <a href="adiciona.php" class="btn btn-outline-dark btn-lg px-5" type="submit" style="margin-top: 10px;">Adicionar</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>