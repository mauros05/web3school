<?php 
    // Concatenate a String
    $x = 5;
    $y = 10;
    
    echo "$x . $y";
    echo "<br>";

    echo "$x$y";
    echo "<br>";

    echo $x . $y;
    echo "<br>";

    // Slice a Strign
    $variable = "Hello World!";
    echo substr($variable, 6, 5);
    echo "<br>";
    //Convert String into Array

    $my_string = "Hello World!";
    $my_array = explode(" ", $my_string);

    print_r($my_array);
    echo "<br>";
    // Scape Characters
    // echo "Hello, this is a "/Scape Variable"/";
?>