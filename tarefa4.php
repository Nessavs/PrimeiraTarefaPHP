<?php
    $tt= $_POST['tt'];
    function mostrar($tt){
        $i = 0;
        while ($i<10){
            echo $tt . '<br>';
            $i ++;
        }
    }
    mostrar($tt);
?>