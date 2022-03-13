<?php 
    session_start();
    require '../db/conexao.php';
    require "../templates/header.php";


    if (!isset($_GET['id'])) {
        header ("Location: index.php");
    }

    $id = $_GET['id'];
    $resultados = $conexao->query("SELECT * FROM terra where id = $id");
    $row = $resultados->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
   <!-- BootStrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Terra</title>
</head>

<body> 
<div class="container">
<h2 class="font-weight-bold mb-5">Editar Terra</h2>
<form action='./updates/update_terra.php?id=<?php echo $id?>' method="POST" class="row g-3">
<div class="col-6">
        <label class="form-label">Proprietário</label>
        <input type="text" class="form-control" id="proprietario_terra" name="proprietario_terra"value="<?php echo $row['proprietario_terra']; ?>">
    </div>
    <div class="col-md-6">
        <label class="form-label">Número da Matrícula</label>
        <input type="text" class="form-control" id="matricula_terra" name="matricula_terra" value="<?php echo $row['matricula_terra']; ?>">
    </div>
    <div class="col-md-6">
        <label class="form-label">Localização(Endereço)</label>
        <input type="text" class="form-control" id="localizacao_terra" name="localizacao_terra" value="<?php echo $row['localizacao_terra']; ?>">
    </div>
    <div class="col-6">
        <label class="form-label">Dimensões(m2)</label>
        <input type="text" class="form-control" id="A" name="A" value="<?php echo $row['A']; ?>">
    </div>
    <div class="col-6">
        <label class="form-label">Área Total(Ha)</label>
        <input type="text" class="form-control" id="AA" name="AT" value="<?php echo $row['AT']; ?>">
    </div>
    <div class="col-6">
        <label class="form-label">Área Alugável(Ha)</label>
        <input type="text" class="form-control" id="AA" name="AA"value="<?php echo $row['AA']; ?>" >
    </div>
    <div class="col-6">
        <label class="form-label">Área à venda(Ha)</label>
        <input type="text" class="form-control" id="AV" name="AV" value="<?php echo $row['AV']; ?>">
    </div>
    <div class="col-6">
        <label class="form-label">Aréa Produtiva(Ha)</label>
        <input type="text" class="form-control" id="AP" name="AP" value="<?php echo $row['AP']; ?>">
    </div>
    <div class="col-6">
        <label class="form-label">Área Rochosa(Ha)</label>
        <input type="text" class="form-control" id="AR" name="AR" value="<?php echo $row['AR'];?>">
    </div>
    <div class="col-6">
        <label class="form-label">Potreiro(Ha)</label>
        <input type="text" class="form-control" id="potreiro" name="potreiro" value="<?php echo $row['potreiro']; ?>">
    </div>
    <div class="col-6">
        <label class="form-label">Valor</label>
        <input type="text" class="form-control" id="valor" name="valor" value="<?php echo $row['valor']; ?>">
    </div>
    <button class="btn btn-primary" type="submit">Salvar</button>
  </div>
</form>
</div>



<?php require "../templates/footer.php" ?>