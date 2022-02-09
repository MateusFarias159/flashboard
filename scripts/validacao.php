<?php

require_once "../model/Usuario.php";
require_once "../model/Conexao.php";

$erros = array();

$usuario = new Usuario();
$usuario->setId($_POST["id"]);
$usuario->setUsuario($_POST["usuario"]);
$usuario->setSenha($_POST["senha"]);

if(empty($usuario->getUsuario()) OR empty($usuario->getSenha())){
  header("Location: ../"); exit;
}if ($usuario->getUsuario() != "admin" AND $usuario->getSenha() != "123") {
    header("Location: ../"); exit;
}else{
    session_start();
    $_SESSION["login"] = true;
    $_SESSION["id"] = $usuario->getId();
    header("Location: ../inicio.php"); exit;
}


// if(empty($usuario->getUsuario()) OR empty($usuario->getSenha())){
//     $erros[] = "<li>campos vazios!</li>";
// }else{

//     $sql = "SELECT * FROM usuarios WHERE login ='$login'";
//     $sqlnum = "SELECT COUNT(*) FROM usuarios WHERE usuario ='$login'";

//     $resultado = Conexao::selectAll($sql);
//     $num = Conexao::selectAll($sqlnum);

//     if($num > 0){

//         $sql = "SELECT * FROM usuarios WHERE usuario = '$login' AND senha ='$senha'";
//         $sqlnum = "SELECT COUNT(*) FROM usuarios WHERE usuario = '$login' AND senha ='$senha'";

//         $resultado = Conexao::selectAll($sql);
//         $num = Conexao::selectAll($sqlnum);

//         if($num == 1){

//           $_SESSION["logado"] = true;
//           $_SESSION["id"] = $resultado["id"];
//           header("Location: ../inicio.php");

//         }else{
//             $erros[] = "usuário e senha não reconheidos";
//         }

//     }else{
//       $erros[] = "usuário não existe";
//     }

// }


print_r($usuario);