<?php

session_start();

if(!isset($_SESSION["login"]) OR $_SESSION["login"] == false){
    header("Location: ../index.php"); exit;
}

require_once "model/Produto.php";

if(isset($_POST["id"])){
    $produto = Produto::getPorId($_POST["id"]);
    //print_r($produto);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./styles/base.min.css" />
    <link rel="stylesheet" href="./styles/index.min.css" />
    <link rel="stylesheet" href="./css/style.css">

    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>  
</head>

<body>

    <header>

        <nav class="pad navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="#">Dashboard</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                  <li class="nav-item active">
                    <a class="nav-link" href="#produtos">Produtos <span class="sr-only"></span></a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="registrador.php">Pedidos</a>
                  </li>

                </ul>


              </div>
        </nav>

        

    </header>

    <main>


    </section>
    <main class="container-fluid">
        <h5>
            Cadastre um produto
        </h5>

        <div class="pad-bt container create-form">
            <form action="ws/salvar-produto.php" class="register-form" id="register-form">
                <div class="row ">
                    <div class="col-sm-12 col-lg-6 mb-lg-5 mb-3">
                        <label for="name-input">Nome</label>
                        <input type="text" name="nome" id="name-input" class="form-control form-control-lg"
                            placeholder="Nome do produto" aria-label="Nome" value="<?= isset($produto) ? $produto->getNome() : ''; ?>" required>
                    </div>

                    <div class="col-sm-12 col-lg-6 mb-lg-5 mb-3 col-md-4">
                        <label for="type-name-input">Tipo de produto</label>
                        <select id="type-name-input" name="tipo" class="form-control form-control-lg" aria-label="Tipo do produto" required>
                          <option selected disabled></option>
                          <option>tijolo</option>
                          <option>cimento</option>
                          <option>telha</option>
                          <option>madeira</option>
                        </select>
                    </div>
                

                <script>
                $(document).ready(function(){
                    $('.money2').mask('000.000.000.000.000,00', {reverse: true});
                });     
                </script>
               
                  <div class="col-sm-12 col-lg-6 mb-lg-5 mb-3">
                      <label for="preco-input">Preço</label>
                      <input type="text" name="preco" id="preco-input" class="money2 form-control form-control-lg"
                         placeholder="Preco do produto" aria-label="Preco do produto" value="<?= isset($produto) ? $produto->getPreco() : ''; ?>" required>
                 </div>
                 
                </div>
                

                <input type="hidden" name="id" value="<?= isset($produto) ? $produto->getId() : ''; ?>">

                <input id="submit-button" type="submit" class="btn btn-primary mb-3" value="Cadastrar produto" />
            </form>
        </div>



<section id="produtos" class="lista">

        <section class="spikes" id="separator-info">
            <h3>
                CATÁLOGO
            </h3>
            <p>Aqui estão os produtos que você registrou até agora! </p>
        </section>

<?php
        $produtos = Produto::listarTodos();
        //print_r($produtos);
        foreach($produtos as $b):
    ?>
    <div class="card card-w booksize
            d-inline-block m-2 text-left">
        <div class="card-body">
            <!-- Código "mesclado" -->
            <!-- insert img -->
            <h5 class="card-title">
                <?php echo $b->getNome(); ?>
            </h5>
            <h6 class="card-subtitle">
                <?= $b->getTipo(); ?>
            </h6>
            <p class="card-text">
                <?= $b->getPreco(); ?>
            </p>
<a href="inicio.php?id=<?= $b->getId(); ?>"
    class="card-link btn btn-warning">
    Editar
</a>
<a
    onclick="deletar(<?= $b->getId(); ?>)"
    class="card-link btn btn-secondary">
    Deletar
</a>
        </div>
    </div>
   <?php 
   endforeach;
   ?>
</section>

<!-- EDIT SETTINGS -->


    </main>

    <footer>

    </footer>    


</body>

</html>