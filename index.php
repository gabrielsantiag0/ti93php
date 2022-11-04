<?php 
 //declarando variáveis
$anon = 1989;
$anoa = 2022;

 $idade = $anoa - $anon; 


//$idade = "Dezenove";
//$idade = 19.5
echo("<h3> A idade do pião é: ".$idade." </h3>");

 $times = array();
$times[0] = "palmeiras";
$times[1] = "internacional";
$times[2] = "flamengo";
echo("<br>");
print_r($times);
echo("<br>");
foreach ($times as $times) {
    echo($times. "<br>");
}
?>
<table>
    <th>Id</th>
    <th>nome</th>
    <?php foreach ($times as $Id => $nome) { ?>
        <tr>
            <td><?php echo($Id + 1);?> </td>;
            <td><?php echo($nome + 1);?> </td>;
        </tr>
    <?php } ?>
</table>