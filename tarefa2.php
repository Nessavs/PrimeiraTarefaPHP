<?php
$idd=$_POST['idd'];
if ($idd >= 5 && $idd <=7 ){
  echo "<h1>nadador esta na Infantil A = 5 - 7 anos</h1><br>";
}
elseif ($idd >= 8 && $idd <=10){
  echo "<h1>nadador esta na Infantil B = 8 - 10 anos </h1><br>";
}
elseif ($idd >= 11 && $idd <=13){
  echo "<h1>nadador esta na Juvenil A = 11 - 13 anos </h1><br>";
}
elseif ($idd >= 14 && $idd <=17){
  echo "<h1>nadador esta na Juvenil B = 14 - 17 anos </h1><br>";
}
else{
  echo "<h1>nadador esta na Sênior = maiores de 17 anos. </h1><br>";
}
?>