<?php
    $con = mysqli_connect("localhost","root","mirim2","php");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql = "select id, name, birth, tel, email, gender, age from members;";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
            $id = $row['id'];
            $name = $row['name'];
            echo $id."\t";
            echo "<a href='admin_search2.php?select=name&text=$name '>$name</a><br>";
        }
    }
    else {
         echo "저장된 데이터가 없습니다.";
    }
    mysqli_close($con);
?>