<?php
    $grade = 92;

    if ($grade >= 75)
    {
        echo "Passed.";

        if ($grade >= 90)
        {
            echo "<br>With Honors.";
        }
    }
    else
    {
        echo "Failed.";
    }
?>