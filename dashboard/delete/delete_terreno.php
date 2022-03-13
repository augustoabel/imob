<?php 
    session_start();
    require '../../db/conexao.php';
    $id_terreno = $_GET['id'];
    
    $conexao->query("DELETE FROM terreno WHERE id = $id_terreno");
    header('Location: ../listar_terrenos.php');
?>