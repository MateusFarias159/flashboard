<?php
require_once "../model/Produto.php";

echo $_POST["id"];
Produto::deletar($_POST["id"]);

header("Location: ../index.php?msg=Item deletado");