<?php
    $id = $_POST["id"];
    $pw = $_POST["pw"];

    if($id == "park" && $pw == "0627") {
        echo "{$id}님 환영합니다!";
    }
    else {
        echo "아이디 또는 비밀번호를 확인하세요.";
    }
?>