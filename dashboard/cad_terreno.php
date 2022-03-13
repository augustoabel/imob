<?php 
    session_start();
    require "../db/conexao.php";
    require "../templates/header.php";
?>

<title>Cadastrar Terreno</title>
<div class="container">
<h2 class="font-weight-bold mb-5">Cadastro de Terrenos</h2>
<form action='/IMOB/dashboard/data/dados-terrenos.php' method="POST" class="row g-3">
<div class="col-6">
        <label class="form-label">Proprietário</label>
        <input type="text" class="form-control" id="proprietario_terreno" name="proprietario_terreno">
    </div>
    <div class="col-md-6">
        <label class="form-label">Número da Matrícula</label>
        <input type="text" class="form-control" id="matricula_terreno" name="matricula_terreno" >
    </div>
    <div class="col-md-6">
        <label class="form-label">Localização(Endereço)</label>
        <input type="text" class="form-control" id="localizacao_terreno" name="localizacao_terreno">
    </div>
    <div class="col-6">
        <label class="form-label">Dimensões(m2)</label>
        <input type="text" class="form-control" id="At" name="At">
    </div>
    <div class="col-6">
        <label class="form-label">Valor R$</label>
        <input type="text" class="form-control" id="valor" name="valor">
    </div>
    <div class="col-6">
        <label class="form-label">Observação</label>
        <input type="text" class="form-control" id="obs" name="obs">
    </div>
    <button class="btn btn-primary" type="submit">Salvar</button>
  </div>
</form>
</div>

<?php require "../templates/footer.php" ?>

