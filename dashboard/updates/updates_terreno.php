<?php 
    session_start();
    require '../../db/conexao.php';

    if (!isset($_GET['id']) || !isset($_POST)) {
        header('Location: index.php');
    }

    $id_terreno = $_GET['id'];
    $proprietario_terreno = $_POST['proprietario_terreno'];
    $matricula_terreno = $_POST['matricula_terreno'];
    $localizacao_terreno = $_POST['localizacao_terreno'];
    $At = $_POST['At'];
    $valor = $_POST['valor'];
    $obs = $_POST['obs'];


    $conexao->query("UPDATE terreno SET proprietario_terreno = '$proprietario_terreno', matricula_terreno = '$matricula_terreno', localizacao_terreno = '$localizacao_terreno', `At` = '$At', valor = '$valor', obs = '$obs' WHERE id = $id_terreno");
    header('Location: ../listar_terreno.php');
   
   
?>
