<?php 
    session_start();
    require "../db/conexao.php";
    require "../templates/header.php";
?>

<div class="container">

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Proprietário</th>
      <th scope="col">Nº da Matrícula</th>
      <th scope="col">Localização</th>
      <th scope="col">Dimensão</th>
      <th scope="col">Valor</th>
      <th scope="col">Obs</th>
    </tr>
  </thead>
  <tbody>
  
  <?php 

    $resultados = $conexao->query("SELECT * FROM terreno");
    while ($row = $resultados->fetch_assoc()):   

    ?>

  <tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['proprietario_terreno']?></td>
    <td><?php echo $row['matricula_terreno']?></td>
    <td><?php echo $row['localizacao_terreno']?></td>
    <td><?php echo $row['at']?></td>
    <td>
      <?php
          $preco = $row['valor'];
          echo "R$" . number_format($preco,2,",",".")
      ?>
    </td>
    <td><?php echo $row['obs']?></td>
    <a class="btn btn-success" href="./cad_terreno.php" role="button">Cadastrar</a>
    <td>
      
      <a class="btn btn-primary" href="editar_terreno.php?id=<?php echo $row['id']?>">Editar</a>
      <button class="btn btn-danger" onclick="deletar(<?php echo $row['id']?>)">Excluir</button>
    </td>
  </tr>
    <?php endwhile; ?>
  </tbody>
</table>


</div>

<script> 
    function deletar(id) {
        if (window.confirm('Deseja excluir o Terreno?')) {
          window.location.assign('./delete/delete_terreno.php?id=' + id)
      }
    }
</script>

<?php require "../templates/footer.php" ?>