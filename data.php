<?php 
include 'config.php';
$data_atual = new DateTime();

print_r($data_atual);
    echo'<br>';
echo $data_atual->format('d/m/y');
    echo'<br>';
    $dias = 30;
    for ($i=1; $i <13; $i++){

echo $i.'ª parcela - '.(new DateTime('+'.$i.'month'))->format('d/m/Y'); 
$dias += 30; // $dias = dias + 30;
echo'<br>';
}
echo'<br>';
$data_sistema = new DateTime();
$data_nasc = new DateTime('2004/3/29');
print_r($data_nasc);
echo'<br>';
$intervalo = $data_nasc->diff($data_sistema);
print_r($intervalo);
echo'<br>';
echo $intervalo->format('%y anos, %m meses e %d dias');























?>