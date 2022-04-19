<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Tarefa 6, 5 e 7
  </title>
  <h1>6)Faça um programa em PHP que exiba todos os números de 0 a 100</h1>
</head>
<body>

<?php
function nMostra6() {
    $cont= 0;

    while($cont <= 100){
      echo $cont . "<br>";
      $cont++;
    }
}
nMostra6();
?>
<h1>5)Faça um programa em PHP que exiba a soma de todos os números de 0 a 10.</h1>
<?php
    function conta10(){
        $ncont = 0;
        $resultado = 0;
        while ($ncont<=10){
            echo "Somando: " . $resultado . " + " .  $ncont;
            $resultado = $ncont + $resultado;
            $ncont ++;
            echo " Resultado: " . $resultado . "<br>";
        } 
    }
    conta10();
?>
<h1>7)Faça um programa em PHP que exiba todos os números pares de 0 a 100</h1>
<?php

function nPar() {
    $cont = 0;

    while($cont <= 100){
        if ($cont % 2 == 0 ){
            echo "Número ". $cont ." é par <br>";
        }
        $cont++;
    }
}

nPar();

?>
</body>
</html>