<?php 
//comentario linha
# comentario de linha
/* comentario*/

// declaracao de variaveis e matrizes - manipulação de data/hr - manipulação de stringer
$nome = "gabriel";
$dataNasc = date('2003/05/20');
echo($nome.' - '. $dataNasc);
echo('<br>');
$hoje = date('d/m/Y H:i:s');
echo('<br>');

        //definindo timezone
date_default_timezone_set('America/Sao_Paulo');


$data = new DateTime();
echo('<br>');
//print_r($data);

$hoje = date('d/m/Y H:i:s'); echo($hoje.'<br>');
$hoje = date('d-m-Y H:i:s'); echo($hoje.'<br>');
$hoje = date('D, d M Y'); echo($hoje.'<br>');
$hoje = date('M H:i:s'); echo($hoje.'<br>');
$hoje = date('D-d H:i'); echo($hoje.'<br>');
$hoje = date('d/m/Y H:i:s'); echo($hoje.'<br>');
$teste = true;
$idade = 35;
$valor = 458.65;
$grana = 0;
// estrutura  de controle de decisão
if (!($grana>0)) { // caso retorne verdadeiro
    echo('Sacar grana!<br>');
}
//estrutura de repetição

// funções e configurações
if(isset($_GET['enviar'])){
$nome = $_GET['txt-nome'];
$email = $_GET['txt-email'];
$data_nasc = $_GET['txt-data-nasc'];
$dataT = new Datetime($data_nasc);
$data_nasc = date_format($dataT,'d-M-Y');

$aluno =array('nome'=>$nome,'email'=>$email, 'datan'=>$data_nasc);

foreach($aluno as $key => $value){
    echo('<h2>'.$key.': '. $value.'</h2>');
}
0
// echo('<h1>'.$valor.'</h1>');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="get">
        <label for="txt-nome">
            nome:
            <input type="text" name="txt-nome" placeholder="digite o nome..." required>
        </label> <br>
<label for="">
    email:
    <input type="text" name="txt-email" placeholder="digite o email..." required>
</label> <br>
<label for="">
    Data Nascimento:
<input type="date" name="txt-data-nasc" required>
</label> <br>
        <button type="submit" name=enviar>Enviar</button>

    </form>
</body>
</html>