<?php
echo '<p> 12)Faca um programa em PHP que exiba todos os numeros pares de 0 a 100; </p>';
function nPar() {
    $cont = 0;
    for ($cont = 0; $cont <= 100; $cont++) {
        if ($cont % 2 == 0 ){
            echo "Numero " . $cont . " e par <br>";
        }
    }
}
nPar();

function numero(){
    $numero = rand(0,50);

    return $numero;
}
function nSorteio(){
    $numero = 0;
    echo '<p>13) Faca um programa em PHP que sorteie numeros aleatorios de 0 a 50,
    imprima todos na tela e so pare quando o numero sorteado for 37;</p>';
   for ($numero = 0; $numero != 37;) {
        $numero = numero();
        echo $numero . " <br>";
           
   }
}
nSorteio();
?>