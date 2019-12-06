<?php
    $select = $_GET["select"];
    $text = $_GET["text"];

    $con = mysqli_connect("localhost","root","mirim2","php");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $sql = "select * from members where $select = '$text';";
    $result = mysqli_query($con, $sql);

    echo "<검색결과><br><br>";
    
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
            echo "id : ".$row['id']."<br>";
            echo "name : ".$row['name']."<br>";
            echo "gender : ".$row['gender']."<br>";
            echo "birth : ".$row['birth']."<br>";
            echo "address : ".$row['addr1']." ".$row['addr2']."<br>";
            echo "tel : ".$row['tel']."<br>";
            echo "email : ".$row['email']."<br>";
            echo "age : ".$row['age']."<br>";
        }
    }
    else {
        echo "저장된 데이터가 없습니다.";
    }
    mysqli_close($con);
?>  