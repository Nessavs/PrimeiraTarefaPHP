<?php

$alt=$_POST['alt'];
$sexo=$_POST['sexo'];

function pesoIdeal($alt, $sexo){
    if ($sexo == 'masculino'){
        $pesoIdeal = ('72.7'*$alt) - '58';
    }else{
        $pesoIdeal = ('62.1'*$alt) - '44.7';
    }
    $resultado = ("<br> <b>Peso Ideal: </b>". $pesoIdeal ."<br>");
    echo $resultado;
}
pesoIdeal($alt, $sexo);
?>