<?php
  session_start();
  include('../login/verificar_login.php');
  include('../templates/header.php');
?>

<style>

    .largura {
      width: 1018px;
      height: 509px;
    }

</style>



<div class="container largura">

    <h1 class="text-center">Sistema de corretor de imóveis</h1>


    <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img1.jpeg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Terrenos</h5>
        <p class="card-text"></p>
        <a class="btn btn-success" href="./cad_terreno.php" role="button">Cadastrar</a>
      </div>
    </div>
  </div>
</div>

<!-- ---------------------------------------------------- -->

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img1.jpeg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Terras</h5>
        <p class="card-text"></p>
        <a class="btn btn-success" href="./cad_terra.php" role="button">Cadastrar</a>
      </div>
    </div>
  </div>
</div>

<!-- ---------------------------------------------------- -->

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img1.jpeg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Casas</h5>
        <p class="card-text"></p>
        <a class="btn btn-success" href="./cad_casa.php" role="button">Cadastrar</a>
      </div>
    </div>
  </div>
</div>




<?php 
  include('../templates/footer.php');
?>

