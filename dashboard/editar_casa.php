<?php 
    session_start();
    require '../db/conexao.php';
    require "../templates/header.php";


    if (!isset($_GET['id'])) {
        header ("Location: index.php");
    }

    $id = $_GET['id'];
    $resultados = $conexao->query("SELECT * FROM casa where id = $id");
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
    <title>Editar Lavouras</title>
</head>

<body> 
<div class="container">
<h2 class="font-weight-bold mb-5">Editar Casa</h2>
<form action='./updates/update_casa.php?id=<?php echo $id?>' method="POST" class="row g-3">

    <div class="col-6">
        <label class="form-label">Proprietário</label>
        <input type="text" class="form-control" id="proprietario" name="proprietario"value="<?php echo $row['proprietario']; ?>">
    </div>
    <div class="col-md-6">
        <label class="form-label">Número da Matrícula</label>
        <input type="text" class="form-control" id="matricula" name="matricula" value="<?php echo $row['matricula']; ?>">
    </div>
    <div class="col-md-6">
        <label class="form-label">Localização(Endereço)</label>
        <input type="text" class="form-control" id="localizacao" name="localizacao" value="<?php echo $row['localizacao']; ?>">
    </div>
    <div class="col-6">
        <label class="form-label">Área do terreno</label>
        <input type="text" class="form-control" id="area" name="area" value="<?php echo $row['area']; ?>">
    </div>
    <div class="col-6">
        <label class="form-label">Área aberta</label>
        <input type="text" class="form-control" id="aberta" name="aberta" value="<?php echo $row['aberta']; ?>">
    </div>
    <div class="col-6">
        <label class="form-label">Área Construída</label>
        <input type="text" class="form-control" id="construida" name="construida"value="<?php echo $row['construida']; ?>" >
    </div>
    <div class="col-6">
        <label class="form-label">Quantidade de Banheiros</label>
        <input type="text" class="form-control" id="banheiros" name="banheiros" value="<?php echo $row['banheiros']; ?>">
    </div>
    <div class="col-6">
        <label class="form-label">Quantidade de Salas</label>
        <input type="text" class="form-control" id="salas" name="salas" value="<?php echo $row['salas']; ?>">
    </div>
    <div class="col-6">
        <label class="form-label">Quantidade de Quartos</label>
        <input type="text" class="form-control" id="quartos" name="quartos" value="<?php echo $row['quartos'];?>">
    </div>
    <div class="col-6">
        <label class="form-label">Quantidade de garagens</label>
        <input type="text" class="form-control" id="garagem" name="garagem" value="<?php echo $row['garagem']; ?>">
    </div>
    <div class="col-6">
        <label class="form-label">Número da casa/apartamento</label>
        <input type="text" class="form-control" id="Ncasa" name="Ncasa" value="<?php echo $row['Ncasa']; ?>">
    </div>
    <div class="col-6">
        <label class="form-label">Possui Quiósque?</label>
        <input type="text" class="form-control" id="quiosque" name="quiosque" value="<?php echo $row['quiosque']; ?>">
    </div>
    <div class="col-6">
        <label class="form-label">Valor</label>
        <input type="text" class="form-control" id="valor" name="valor" value="<?php echo $row['valor']; ?>">
    </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Salvar</button>
  </div>
</form>
</div>



<?php require "../templates/footer.php" ?>