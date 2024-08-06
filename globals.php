<?php 
    $x = 5;
    $y = 10;

    function myFunct(){
        global $x, $y;
        $y = $x + $y;
    }

    myFunct();
    echo $y;
?>