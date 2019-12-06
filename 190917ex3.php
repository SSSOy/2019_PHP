<?php
    $name = $_GET["name"];
    $grade = $_GET["grade"];
    $subcount = count($_GET["subject"]);

    echo "이름 : $name<br>";
    echo "학년 : $grade<br>";
    echo "과목 : ";
    for($i = 0; $i < $subcount; $i++) {
        echo $_GET["subject"][$i];
        if($i != $subcount - 1)
            echo ", ";
    }
?>