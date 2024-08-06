<?php 
    function myStaticFunction(){
        static $x = 0;
        echo $x;
        $x++;
    }

    echo myStaticFunction();
    echo "<br>";
    echo myStaticFunction();
    echo "<br>";
    echo myStaticFunction();
    echo "<br>";
?>