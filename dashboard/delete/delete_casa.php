<?php 
    session_start();
    require '../../db/conexao.php';
    $id_casa = $_GET['id'];
    
    $conexao->query("DELETE FROM casa WHERE id = $id_casa");
    header('Location: ../listar_casas.php');
?>