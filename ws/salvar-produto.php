<?php

require_once "../model/Produto.php";

$produto = new Produto();
$produto->setId($_POST["id"]);
$produto->setNome($_POST["nome"]);
$produto->setTipo($_POST["tipo"]);
$produto->setPreco($_POST["preco"]);

print_r($produto);

    if($produto->getId() == ""){
        $produto->salvar();
    }
    else{
        $produto->editar();
    }

    header("Location: ../inicio.php");