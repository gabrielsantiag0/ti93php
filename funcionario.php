<?php include 'conecta.php';

$consultasgl = "SELECT * FROM FUNCIONARIO WHERE DEMISSAO IS NULL";

$funcionario = $conn->query($consultasgl);

$now = $funcionario->fetch();

$num_rows = $funcionario-> rowCount();

if(isset($_POST['bt-enviar']))
{
    $nome = $_POST['Nome'];
    $cpf = $_POST['Cpf'];
    $cargo = $_POST['Cargo'];
    $escala = $_POST['Escala'];
    $turno = $_POST['Turno'];
    $admissao = $_POST['Admissão'];
    $salario = $_POST['Salario'];
    $VT = $_POST['VT'];
    $VR = $_POST['VR'];
    $VA = $_POST['VA'];
    $inserSql = "insert funcionario (nome, cpf,cargo,escala,turno,Admissão,salario,VT,VR,VA) values('$nome','$cpf','$cargo','$escala','$turno',$admissao','$salario','$VT','$VR','$VA')";
    $resultado = $conn->query($consultasgl);
    header('location: funcionario.php');

}



?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>funcionario</title>
</head>
<body>
<form action="#" method="POST">
<div hidden>
<label for="Cod">Código
                <input type="text" name="cod" id=""></label>
        </div>
        <div class="campo">
            <label for="Nome">Nome
                <input type="text" name="Nome" id=""></label>
        </div>
        <div class="campo">
            <label for="Cpf">cpf
                <input type="number" name="Cpf" id=""></label>
        </div>
        <div class="Campo">
            <label for="cargo">Nome
                <input type="text" name="Cargo" id=""></label>
        </div>
        <div class="campo">
            <label for="Escala">Escala
                <input type="text" name="Escala" id=""></label>
        </div>
        <div class="campo">
            <label for="Turno">Turno
                <input type="text" name="Turno" id=""></label>
        </div>
        <div class="campo">
            <label for="Adimisaao">Admissao
                <input type="text" name="Admissão" id=""></label>
        </div>
        <div class="campo">
            <label for="Salario">Salario
                <input type="number" name="Salario" id=""></label>
        </div>
        <div class="campo">
            <label for="VT">vt
                <input type="text" name="vt" id=""></label>
        </div>
        <div class="campo">
            <label for="VR">vr
                <input type="text" name="vr" id=""></label>
        </div>
        <div class="campo">
            <label for="VA">va
                <input type="text" name="va" id=""></label>
        </div>
        <div>
            <button type="submit" name="bt-enviar">Enviar</button>
        </div>
</form>
<table class="tabelinha td">
        <thead>
                <th>Cod</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>CARGO</th>
                <th>ESCALA</th>
                <th>TURNO</th>
                <th>ADIMISSÃO</th>
                <th>SALARIO</th>
                <th>VT</th>
                <th>VR</th>
                <th>VA</th>
        </thead>
</table>

    <table class="tabelinha td">
        <thead>
            <th>DOC</th>
            <th>NOME</th>
            <th>CPF</th>
            <th>CARGO</th>
            <th>ESCALA</th>
            <th>TURNO</th>
            <th>ADIMISSÂO</th>
            <th>SALARIO</th>
             <th>VT</th>
             <th>VR</th>
             <th>VA</th>
             <tbody>
                <?php do {?>
                    <tr>
 <td><?php echo $row['cod']?></td>

<td><?php echo $row['nome']?></td>

<td><?php echo $row['cpf']?></td>

<td><?php echo $row['cargo']?></td>

<td><?php echo $row['escala']?></td>

<td><?php echo $row['turno']?></td>

<td><?php echo $row['admissao']?></td>

<td><?php echo $row['salario']?></td>

<td><?php echo $row['vt']?></td>

<td><?php echo $row['vr']?></td>

<td><?php echo $row['va']?></td>
</tr>
<?php } while($row = $funcionario->fetch())?>
             </tbody>
        </thead>
    </table>
</body>
</html>
