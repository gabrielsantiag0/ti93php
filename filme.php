<?php 
include 'conecta.php';
    $consultaSql = "SELECT * FROM FILME ORDER BY LANCAMENTO DESC";

    $filme = $conn->query($consultaSql);

    $row = $filme->fetch();

    $num_rows = $filme-> rowCount();

    if(isset($_POST['btienviar']))
    {
        $titulo = $_POST['titulo'];
        $sinopse = $_POST['sinopse'];
        $lancamento = $_POST['lançamento'];
        $titulo = $_POST['titulo'];
    }



?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Filmes</title>
</head>
<body>
    <form action="#" method="POST">
    <div hidden>
            <label for="cod">Código
        <input type="text" name="cod" id=""></label>
      </div>
        <div class="campo">
            <label for="titulo">Titulo
                <input type="text" name="titulo" id=""></label>
        </div>
        <div class="campo">
            <label for="sinopse">sinopse
                <input type="text" name="sinopse" id=""></label>
        </div>
        <div class="campo">
            <label for="lancamento">lançamento
                <input type="text" name="lançamento" id=""></label>
        </div>
        <div class="campo">
            <label for="pais_origem">Pais Origem
                <input type="text" name="pais_origem" id=""></label>
        </div>
        <div class="campo">
            <label for="duracao">Duração
                <input type="text" name="duracao" id=""></label>
        </div>
        <div class="campo">
            <label for="preco">Preço
                <input type="number" name="preco" id=""></label>
        </div>
        <div >
            <label for="cod_classificacao">cod de classificação
                <input type="text" name="classificacao" id=""></label>
        </div>
    </form>
    <table class="tabelinha td">
    <thead>
<th>Cod</th>
<th>titulo</th>
<th>sinopse</th>
<th>lançamento</th>
<th>Pais de origem</th>
<th>duração</th>
<th>Preço</th>
<th>cod de classificação</th>
    </thead>
    <?php do {?>
        <tr>
            <td>
                <?php 
                echo $row['cod_filme'];
                ?>
            </td>
<td>
    <?php 
    echo $row['titulo'];
    ?>
</td>
<td>
<?php
   echo $row['sinopse'];
?>
</td>
<td>
<?php
   echo $row['lançamento'];
?>
</td>
<td>
<?php
  echo $row['pais de origem'];
?>
</td>
<td>
<?php
  echo $row['duração'];
?>
</td>
<td>
<?php
  echo $row['preço'];
?>
</td>
<td>
<?php
  echo $row['cod de classificação'];
?>
</td>
</tr> 
<?php } while($row = $lista->fetch()) ?>             
 </table>
</body>

</html>