<?php 
    session_start();
    require "../db/conexao.php";
    require "../templates/header.php";
?>

<title>Cadastrar Terras</title>
<div class="container">
<h2 class="font-weight-bold mb-5">Cadastro de Terras</h2>
<form action='/IMOB/dashboard/data/dados-terras.php' method="POST" class="row g-3">
<div class="col-6">
        <label class="form-label">Proprietário</label>
        <input type="text" class="form-control" id="proprietario_terra" name="proprietario_terra">
    </div>
    <div class="col-md-6">
        <label class="form-label">Número da Matrícula</label>
        <input type="text" class="form-control" id="matricula_terra" name="matricula_terra" >
    </div>
    <div class="col-md-6">
        <label class="form-label">Localização(Endereço)</label>
        <input type="text" class="form-control" id="localizacao_terra" name="localizacao_terra">
    </div>
    <div class="col-6">
        <label class="form-label">Dimensões(m2)</label>
        <input type="text" class="form-control" id="A" name="A">
    </div>
    <div class="col-6">
        <label class="form-label">Área Total(Ha)</label>
        <input type="text" class="form-control" id="AA" name="AT">
    </div>
    <div class="col-6">
        <label class="form-label">Área Alugável(Ha)</label>
        <input type="text" class="form-control" id="AA" name="AA">
    </div>
    <div class="col-6">
        <label class="form-label">Área à venda(Ha)</label>
        <input type="text" class="form-control" id="AV" name="AV">
    </div>
    <div class="col-6">
        <label class="form-label">Aréa Produtiva(Ha)</label>
        <input type="text" class="form-control" id="AP" name="AP">
    </div>
    <div class="col-6">
        <label class="form-label">Área Rochosa(Ha)</label>
        <input type="text" class="form-control" id="AR" name="AR">
    </div>
    <div class="col-6">
        <label class="form-label">Potreiro(Ha)</label>
        <input type="text" class="form-control" id="potreiro" name="potreiro">
    </div>
    <div class="col-6">
        <label class="form-label">Valor</label>
        <input type="text" class="form-control" id="valor" name="valor">
    </div>
    <button class="btn btn-primary" type="submit">Salvar</button>
  </div>
</form>
</div>

<?php require "../templates/footer.php" ?>

