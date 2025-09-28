<?php
    $a = 10;
    $b = 5;
    
    echo "a. Arithmetic Operators<br /><br />";

    echo "{$a} + {$b} = " . ($a + $b) . "<br />";
    echo "{$a} - {$b} = " . ($a - $b) . "<br />";
    echo "{$a} * {$b} = " . ($a * $b) . "<br />";
    echo "{$a} / {$b} = " . ($a / $b) . "<br />";
    echo "{$a} % {$b} = " . ($a % $b) . "<br /><br /><br />";

    echo "b. Comparison Operators<br /><br />";

    echo "{$a} == {$b} - ". (($a == $b) ? "true" : "false") . "<br />";
    echo "{$a} != {$b} - ". (($a != $b) ? "true" : "false") . "<br />";
    echo "{$a} > {$b} - ". (($a > $b) ? "true" : "false") . "<br />";
    echo "{$a} < {$b} - ". (($a < $b) ? "true" : "false") . "<br />";
    echo "{$a} <= {$b} - ". (($a <= $b) ? "true" : "false") . "<br />";
    echo "{$a} >= {$b} - ". (($a >= $b) ? "true" : "false") . "<br /><br /><br />";

    echo "c. Logical Operators<br /><br />";

    echo "({$a} == 10 && {$b} == 5) - " . (($a == 10 && $b == 5) ? "true" : "false") . "<br />";
    echo "({$a} == 10 || {$b} > 9) - " . (($a == 10 || $b > 5) ? "true" : "false") . "<br />";
    echo "!({$a} == {$b}) - " . (!($a == $b) ? "true" : "false");
?>