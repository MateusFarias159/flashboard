<?php
require_once "../model/Produto.php";

echo $_GET["id"];
Produto::deletar($_GET["id"]);

header("Location: ../index.php?msg=Item deletado");