<?php 
    session_start();
    require '../../db/conexao.php';
    $id_lavoura = $_GET['id'];
    
    $conexao->query("DELETE FROM terra WHERE id = $id_lavoura");
    header('Location: ../listar_terras.php');
?>