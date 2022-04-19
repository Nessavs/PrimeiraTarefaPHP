<?php

function mTexto($tt){
  for ($num = 0; $num < 10; $num++) {
    echo $tt . '<br>';    
  }
}

$tt = $_POST['tt1'];
mTexto($tt);
?>
