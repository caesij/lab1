<?php
    $a = 10;
    $b = 5;
    
    echo "a. Arithmetic Operators<br><br>";

    echo "Addition: " . ($a + $b) . "<br>";
    echo "Subtraction: " . ($a - $b) . "<br>";
    echo "Multiplication: " . ($a * $b) . "<br>";
    echo "Division: " . ($a / $b) . "<br>";
    echo "Modulo: " . ($a % $b) . "<br><br><br>";

    echo "b. Comparison Operators<br><br>";

    echo "{$a} == {$b} - ". (($a == $b) ? "true" : "false") . "<br>";
    echo "{$a} != {$b} - ". (($a != $b) ? "true" : "false") . "<br>";
    echo "{$a} > {$b} - ". (($a > $b) ? "true" : "false") . "<br>";
    echo "{$a} < {$b} - ". (($a < $b) ? "true" : "false") . "<br>";
    echo "{$a} <= {$b} - ". (($a <= $b) ? "true" : "false") . "<br>";
    echo "{$a} >= {$b} - ". (($a >= $b) ? "true" : "false") . "<br><br><br>";

    echo "c. Logical Operators<br><br>";

    if ($a == 10 && $b == 5)
    {
       echo "&& operator success.<br>"; 
    }

    if ($a == 10 || $b == 5)
    {
        echo "|| operator success.<br>";
    }

    if (!($a == $b))
    {
        echo "! operator success.";
    }
?>