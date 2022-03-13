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
      <th scope="col">Área Total</th>
      <th scope="col">Área Alugável</th>
      <th scope="col">Área à Venda</th>
      <th scope="col">Área Produtiva</th>
      <th scope="col">Área Rochosa</th>
      <th scope="col">Potreiro</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>
  <tbody>
  
  <?php 

    $resultados = $conexao->query("SELECT * FROM terra");
    while ($row = $resultados->fetch_assoc()):   

    ?>

  <tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['proprietario_terra']?></td>
    <td><?php echo $row['matricula_terra']?></td>
    <td><?php echo $row['localizacao_terra']?></td>
    <td><?php echo $row['A']?></td>
    <td><?php echo $row['AT']?></td>
    <td><?php echo $row['AA']?></td>
    <td><?php echo $row['AV']?></td>
    <td><?php echo $row['AP']?></td>
    <td><?php echo $row['AR']?></td>
    <td><?php echo $row['potreiro']?></td>
    <td>
      <?php
        $preco = $row['valor'];
        echo "R$" . number_format($preco,2,",",".")
      ?>
    </td>
    <div class="text">
      <a class="btn btn-success" href="./cad_terra.php" role="button">Cadastrar</a>
    </div>
    <td>
      
      <a class="btn btn-primary m-1" href="editar_terra.php?id=<?php echo $row['id']?>">Editar</a>
      <button class="btn btn-danger" onclick="deletar(<?php echo $row['id']?>)">Excluir</button>
    </td>
  </tr>
    <?php endwhile; ?>
  </tbody>
</table>


</div>

<script> 
    function deletar(id) {
        if (window.confirm('Deseja excluir a Terra?')) {
          window.location.assign('./delete/delete_terra.php?id=' + id)
      }
    }
</script>

<?php require "../templates/footer.php" ?>