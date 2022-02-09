<?php

require_once "../model/Produto.php";

$produto = new Produto();
$produto->setId($_GET["id"]);
$produto->setNome($_GET["nome"]);
$produto->setTipo($_GET["tipo"]);
$produto->setPreco($_GET["preco"]);

print_r($produto);

    if($produto->getId() == ""){
        $produto->salvar();
    }
    else{
        $produto->editar();
    }

    header("Location: ../");