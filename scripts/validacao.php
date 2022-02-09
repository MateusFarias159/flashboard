<?php

session_start();
$_SESSION["login"] = false;

if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
  header("Location: ../"); exit;
}
if ($_POST["usuario"] != "admin" AND $_POST["senha"] != "123") {
  header("Location: ../"); exit;
}else{
  $_SESSION["login"] = true;
  header("Location: ../inicio.php"); exit;
}