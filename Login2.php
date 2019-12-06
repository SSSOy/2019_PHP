<?php

    $con = mysqli_connect("localhost","root","mirim2","php");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql = "select id, pw from members";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
            if($row['id'] == $_POST["id"] && $row['pw'] == $_POST["pw"]) {
                session_start();
                $_SESSION['id'] = $_POST["id"];
                echo("<script>location.href='Login3.php?login=1 '</script>");
            }
        }
    }
    echo("<script>location.href='Login3.php?login=0 '</script>");
?>