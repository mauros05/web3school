<?php 
    $x = 5;
    $y = 10;

    function myFunct(){
        global $x, $y;
        $y = $x + $y;
    }

    function myTest(){
        $GLOBALS["y"] = $GLOBALS["x"] + $GLOBALS["y"];
    }

    // myFunct();
    myTest();
    echo $y;
?>