
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>8, 10 e 11 </title>
<h1>8) Sorteie números aleatórios de 0 a 50, imprima todos na tela e só pare quando o
número sorteado for 37 </h1>
</head>
<body>

<?php   

function numero(){
    $numero = rand(0,50);

    return $numero;
}

function sorteio(){
    $numero = "";
    while($numero != 37){
        $numero = numero();
        echo $numero. " <br>";
    }
}

sorteio();

?>


</body>
</html> 
<html> <head>
  <title>8, 10 e 11 </title>
<h1>10) Faça um programa em PHP que exiba a soma de todos os números de 0 a
10.</h1> 
<h1>11)Faça um programa em PHP que exiba todos os números de 0 a 100;</h1>
</html> </head>


<?php

function contaAte10(){
$resultado = 0;
for ($contador = 0; $contador <= 10; $contador++) {
    echo 'Somando:' . $resultado . ' + ' .  $contador;
    $resultado = $contador + $resultado;
    echo ' | Resultado:' . $resultado . '<br>';
}
}    
contaAte10();


function mostraNumero() {
    $contador = 0;
    for ($contador = 0; $contador <= 100; $contador++) {
      echo $contador . "<br>";
    }
}
mostraNumero();


?>