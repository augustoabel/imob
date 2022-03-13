<?php 
    session_start();
    require "../db/conexao.php";
    require "../templates/header.php";
?>

<title>Cadastrar Casa</title>
<div class="container">
<h2 class="font-weight-bold mb-5">Cadastrar casa</h2>
<form action='./data/dados-casas.php' method="POST" class="row g-3">
    <div class="col-6">
        <label class="form-label">Proprietário</label>
        <input type="text" class="form-control" id="proprietario" name="proprietario" >
    </div>
    <div class="col-md-6">
        <label class="form-label">Número da Matrícula</label>
        <input type="text" class="form-control" id="matricula" name="matricula">
    </div>
    <div class="col-md-6">
        <label class="form-label">Localização(Endereço)</label>
        <input type="text" class="form-control" id="localizacao" name="localizacao">
    </div>
    <div class="col-6">
        <label class="form-label">Área do terreno</label>
        <input type="text" class="form-control" id="area" name="area" >
    </div>
    <div class="col-6">
        <label class="form-label">Área aberta</label>
        <input type="text" class="form-control" id="aberta" name="aberta" >
    </div>
    <div class="col-6">
        <label class="form-label">Área Construída</label>
        <input type="text" class="form-control" id="construida" name="construida" >
    </div>
    <div class="col-6">
        <label class="form-label">Quantidade de Banheiros</label>
        <input type="text" class="form-control" id="banheiros" name="banheiros" >
    </div>
    <div class="col-6">
        <label class="form-label">Quantidade de Salas</label>
        <input type="text" class="form-control" id="salas" name="salas" >
    </div>
    <div class="col-6">
        <label class="form-label">Quantidade de Quartos</label>
        <input type="text" class="form-control" id="quartos" name="quartos" >
    </div>
    <div class="col-6">
        <label class="form-label">Quantidade de garagens</label>
        <input type="text" class="form-control" id="garagem" name="garagem" >
    </div>
    <div class="col-6">
        <label class="form-label">Número da casa/apartamento</label>
        <input type="text" class="form-control" id="Ncasa" name="Ncasa" >
    </div>
    <div class="col-6">
        <label class="form-label">Possui Quiósque?</label>
        <input type="text" class="form-control" id="quiosque" name="quiosque">
    </div>
    <div class="col-6">
        <label class="form-label">Valor</label>
        <input type="text" class="form-control" id="valor" name="valor">
    </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Salvar</button>
  </div>
</form>
</div>

<?php require "../templates/footer.php" ?>

