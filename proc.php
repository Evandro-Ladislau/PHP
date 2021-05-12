<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

$email = filter_input(INPUT_POST, 'email_cliente', FILTER_SANITIZE_STRING);

$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$conf_senha = filter_input(INPUT_POST, 'senha_cliente', FILTER_SANITIZE_STRING);

$result_usuarios = "INSERT INTO usuarios (nome, email, senha, conf_senha) VALUES ('$nome', '$email','$senha', '$conf_senha' )";

$resultado_usuarios = mysqli_query($conn, $result_usuarios);

if(mysqli_insert_id($conn)){
  echo  "Usuario Cadastrado com sucesso";

}else{
   echo  "Usuario Não foi Cadastrado com sucesso";
}