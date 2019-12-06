<?php
    $id = $_POST["id"];
    $pw = $_POST["pw"];

    if($id == "SSSOy" && $pw == "0627") {
        echo "{$id}님 로그인<br>";
        echo "<a href = '190919ex4_2.php?id=$id '>게시판</a><br>";
    }
    else {
        print "<script> alert('로그인실패'); history.go(-1); </script>";
    }
?>
