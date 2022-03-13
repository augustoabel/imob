<?php 
    session_start();
    include "../../db/conexao.php";

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

    $result  = mysqli_query($conexao, "INSERT INTO casa (id, proprietario, matricula, localizacao, area, aberta, construida, banheiros, salas, quartos, garagem, Ncasa, quiosque, valor) values('$id', '$proprietario', '$matricula', '$localizacao', '$area', '$aberta', '$construida', '$banheiros', '$salas', '$quartos', '$garagem', '$Ncasa', '$quiosque', '$valor')");
    if ($result) {
        header('Location: ../listar_casas.php');
    } else {
        echo var_dump($result);
    }
   
   
?>