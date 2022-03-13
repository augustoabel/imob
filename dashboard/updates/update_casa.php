<?php 
    session_start();
    require '../../db/conexao.php';

    if (!isset($_GET['id']) || !isset($_POST)) {
        header('Location: index.php');
    }

    $id = $_GET['id'];
    $proprietario = $_POST['proprietario'];
    $matricula = $_POST['matricula'];
    $localizacao = $_POST['localizacao'];
    $area = $_POST['area'];
    $aberta = $_POST['aberta'];
    $construida = $_POST['construida'];
    $banheiros = $_POST['banheiros'];
    $salas = $_POST['salas'];
    $quartos = $_POST['quartos'];
    $garagem = $_POST['garagem'];
    $Ncasa = $_POST['Ncasa'];
    $quiosque = $_POST['quiosque'];
    $valor = $_POST['valor'];


    $conexao->query("UPDATE casa SET proprietario = '$proprietario', matricula = '$matricula', localizacao = '$localizacao', area = '$area', aberta = '$aberta', construida = '$construida', banheiros = '$banheiros', salas = '$salas', quartos = '$quartos', garagem = '$garagem', Ncasa = '$Ncasa', quiosque = '$quiosque', valor = '$valor'=  WHERE id = $id");
    header('Location: ../listar_casas.php');

    
?>