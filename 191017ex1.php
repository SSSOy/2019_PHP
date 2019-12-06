<?php
    $id = $_POST["id"];
    $name = $_POST["name"];

    $a = setcookie("userid", $id);
    $b = setcookie("username", $name, time() + 60);

    echo("<script>location.href='191017ex2.php'</script>");
    //Header("Location:/191017ex2.php"); 
?>