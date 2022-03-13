<?php 
    session_start();
    include "../../db/conexao.php";

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

    $result  = mysqli_query($conexao, "INSERT INTO terra (id, proprietario_terra, matricula_terra, localizacao_terra, A, `AT`, AA, AV, AP, AR, potreiro, valor) values('$id', '$proprietario_terra', '$matricula_terra', '$localizacao_terra', '$A', '$AT', '$AA', '$AV', '$AP', '$AR', '$potreiro', '$valor')");
    if ($result) {
        header('Location: ../listar_terras.php');
    } else {
        echo var_dump($result);
    }
   
   
?>