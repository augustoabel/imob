<?php 
    session_start();
    require '../db/conexao.php';
    require "../templates/header.php";


    if (!isset($_GET['id'])) {
        header ("Location: index.php");
    }

    $id = $_GET['id'];
    $resultados = $conexao->query("SELECT * FROM terreno where id = $id");
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
    <title>Editar Terreno</title>
</head>

<body> 
<div class="container">
<h2 class="font-weight-bold mb-5">Editar Terreno</h2>
<form action='./updates/updates_terreno.php?id=<?php echo $id?>' method="POST" class="row g-3">
<div class="col-6">
        <label class="form-label">Proprietário</label>
        <input type="text" class="form-control" id="proprietario_terreno" name="proprietario_terreno"value="<?php echo $row['proprietario_terreno']; ?>">
    </div>
    <div class="col-md-6">
        <label class="form-label">Número da Matrícula</label>
        <input type="text" class="form-control" id="matricula_terreno" name="matricula_terreno" value="<?php echo $row['matricula_terreno']; ?>">
    </div>
    <div class="col-md-6">
        <label class="form-label">Localização(Endereço)</label>
        <input type="text" class="form-control" id="localizacao_terreno" name="localizacao_terreno" value="<?php echo $row['localizacao_terreno']; ?>">
    </div>
    <div class="col-6">
        <label class="form-label">Dimensões(m2)</label>
        <input type="text" class="form-control" id="At" name="At" value="<?php echo $row['at']; ?>">
    </div>
    <div class="col-6">
        <label class="form-label">Valor</label>
        <input type="text" class="form-control" id="valor" name="valor" value="<?php echo $row['valor']; ?>">
    </div>
    <div class="col-6">
        <label class="form-label">Observação</label>
        <input type="text" class="form-control" id="obs" name="obs"value="<?php echo $row['obs']; ?>" >
    </div>
    <button class="btn btn-primary" type="submit">Salvar</button>
  </div>
</form>
</div>



<?php require "../templates/footer.php" ?>