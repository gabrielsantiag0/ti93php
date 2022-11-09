<?php 
//-----------------------Gera_Coeficiente_Parcela-------------------------\\
function gera_Coeficiente_Parcela(float $taxa, int $periodo=1): float
{
    return pow((1+($taxa/100)),$periodo)/$periodo;

}
function valida_matricula(DateTime $data){
$diff = $data->diff(new DateTime());
print_r($diff);
        $anos = $diff->format('%y');
        if ($anos < 6) {
            return 'o garoto não pode ser matriculado.';
        }else{
            return 'pode matricular o rebento!';
        }
}

valida_matricula(new DateTime('2020-6-23'));
    //     echo '970 <br>';
    // echo (600 * gera_Coeficiente_Parcela(2.0, 6))*12;
    // echo '<br>';
    // echo 600 * gera_Coeficiente_Parcela(2.0, 6);






















?>