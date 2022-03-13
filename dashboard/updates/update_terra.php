<?php 
    session_start();
    require '../../db/conexao.php';

    if (!isset($_GET['id']) || !isset($_POST)) {
        header('Location: index.php');
    }

    $id_terra = $_GET['id'];
    $proprietario_terra = $_POST['proprietario_terra'];
    $matricula_terra = $_POST['matricula_terra'];
    $localizacao_terra = $_POST['localizacao_terra'];
    $A = $_POST['A'];
    $AT = $_POST['AT'];
    $AA = $_POST['AA'];
    $AV = $_POST['AV'];
    $AP = $_POST['AP'];
    $AR = $_POST['AR'];
    $potreiro = $_POST['potreiro'];
    $valor = $_POST['valor'];


    $conexao->query("UPDATE terra SET proprietario_terra = '$proprietario_terra', matricula_terra = '$matricula_terra', localizacao_terra = '$localizacao_terra', A = '$A', `AT` = '$AT', AA = '$AA', AV = '$AV', AP = '$AP', AR = '$AR', potreiro = '$potreiro', valor = '$valor' WHERE id = $id_terra");
    header('Location: ../listar_terras.php');
   
   
?>
