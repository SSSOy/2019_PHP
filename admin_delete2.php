<?php
    $name = $_GET["name"];

    $con = mysqli_connect("localhost","root","mirim2","php");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $sql = "delete from members where name = '$name';";
    mysqli_query($con, $sql);

    echo "삭제가 완료되었습니다.<br>"

    mysqli_close($con);
?>