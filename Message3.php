<?php
    $name = $_GET["name"];
    $co = mysqli_connect("10.96.120.50","php","0000","php");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql = "select  w_name, date from message_box where name = '$name' && receive = 0;";
    $result = mysqli_query($co, $sql);

    echo "<pre>보낸사람            날짜</pre>";

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
            $w_name = $row['w_name'];
            $date = $row['date'];

            echo "<pre><a href='Message4.php?date=$date '>$w_name</a>            $date</pre>";
        }
    }
    else {
        echo "오류";
    }
    mysqli_close($co);
?>