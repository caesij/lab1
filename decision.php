<?php
    $grade = 92;

    echo "Student's Grade: " . $grade . "<br /><br />";

    if ($grade >= 75)
    {
        echo "Passed";

        if ($grade >= 90)
        {
            echo " - With Honors";
        }
    }
    else
    {
        echo "Failed";
    }
?>