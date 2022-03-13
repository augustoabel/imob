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
      <th scope="col">Área</th>
      <th scope="col">Área aberta</th>
      <th scope="col">Área construída</th>
      <th scope="col">Nº de banheiros</th>
      <th scope="col">Nº de salas</th>
      <th scope="col">Nº de quartos</th>
      <th scope="col">Nº de garagens</th>
      <th scope="col">Quiósque</th>
      <th scope="col">Valor</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
  
  <?php 

    $resultados = $conexao->query("SELECT * FROM casa");
    while ($row = $resultados->fetch_assoc()):   

    ?>

  <tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['proprietario']?></td>
    <td><?php echo $row['matricula']?></td>
    <td><?php echo $row['localizacao']?></td>
    <td><?php echo $row['area']?></td>
    <td><?php echo $row['aberta']?></td>
    <td><?php echo $row['construida']?></td>
    <td><?php echo $row['banheiros']?></td>
    <td><?php echo $row['salas']?></td>
    <td><?php echo $row['quartos']?></td>
    <td><?php echo $row['garagem']?></td>
    <td><?php echo $row['quiosque']?></td>
    <td>
      <?php
        $preco = $row['valor'];
        echo "R$" . number_format($preco,2,",",".")
      ?>
    </td>
    <a class="btn btn-success" href="./cad_casa.php" role="button">Cadastrar</a>
    <td>z
      <a class="btn btn-primary" href="editar_casa.php?id=<?php echo $row['id']?>">Editar</a>
      <button class="btn btn-danger" onclick="deletar(<?php echo $row['id']?>)">Excluir</button>
    </td>
  </tr>
    <?php endwhile; ?>
  </tbody>
</table>


</div>

<script> 
    function deletar(id) {
        if (window.confirm('Deseja excluir a Casa?')) {
          window.location.assign('./delete/delete_casa.php?id=' + id)
      }
    }
</script>

<?php require "../templates/footer.php" ?>