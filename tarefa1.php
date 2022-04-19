<?php
$primeiro=$_POST['numero1'];
$segundo=$_POST['numero2'];
$terceiro=$_POST['numero3'];

function menorNumero($primeiro, $segundo, $terceiro){
  if ($primeiro < $segundo && $primeiro < $terceiro){
    echo "<h1>Por fim, esse e o menor numero: ". $primeiro . "</h1><br>";
  }
  elseif ($segundo < $primeiro && $segundo < $terceiro){
    echo "<h1> Por fim, esse e o menor numero: " . $segundo."</h1><br>";
  }
  else{
    echo "<h1> Por fim, esse e o menor numero: " . $terceiro ."</h1><br>";
  }
}

menorNumero($primeiro, $segundo, $terceiro);
?>