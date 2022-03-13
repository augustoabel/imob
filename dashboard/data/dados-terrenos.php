<?php 
    session_start();
    include "../../db/conexao.php";

    $id = $_GET['id'];
    $proprietario_terreno = $_POST['proprietario_terreno'];
    $matricula_terreno = $_POST['matricula_terreno'];
    $localizacao_terreno = $_POST['localizacao_terreno'];
    $At = $_POST['At'];
    $valor = $_POST['valor'];
    $obs = $_POST['obs'];

    $result  = mysqli_query($conexao, "INSERT INTO terreno (id, proprietario_terreno, matricula_terreno, localizacao_terreno, `At`, valor, obs) values('$id_terreno', '$proprietario_terreno', '$matricula_terreno', '$localizacao_terreno', '$At', '$valor', '$obs')");
    if ($result) {
        header('Location: ../listar_terrenos.php');
    } else {
        echo var_dump($result);
    }
   
   
?>