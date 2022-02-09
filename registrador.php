<?php

session_start();

if(!isset($_SESSION["login"]) OR $_SESSION["login"] == false){
    header("Location: ../"); exit;
}

require_once "model/Produto.php";

if(isset($_GET["id"])){
    $produto = Produto::getPorId($_GET["id"]);
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
                    <a class="nav-link" href="inicio.php">Produtos <span class="sr-only"></span></a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#pedidos">Pedidos</a>
                  </li>

                </ul>


              </div>
        </nav>

    </header>