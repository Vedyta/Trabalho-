<?php

include_once("conexao.php");

$NOME= filter_input(INPUT_POST, 'NOME', FILTER_SANITIZE_STRING); 
$EMAIL = filter_input(INPUT_POST, 'EMAIL', FILTER_SANITIZE_EMAIL); 

//echo "NOME: $NOME <br>";
//echo "EMAIL: $EMAIL <br>";

$result_usuario = "ISERT INTO usuarios (nome, email, criado) VALUES ('$NOME','$EMAIL', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
        header("location : cadastro.php");

} else {
     header("location : cadastro.php");
}