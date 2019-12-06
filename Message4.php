<?php
    $date = $_GET["date"];
    $co = mysqli_connect("10.96.120.50","php","0000","php");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql = "select w_name, contents, date from message_box where date = '$date';";
    $result = mysqli_query($co, $sql);

    $sql = "update message_box set receive = 1 where date = '$date';";
    mysqli_query($co, $sql);


    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
            $name = $row["w_name"];
            $contents = $row["contents"];
            $date = $row["date"];
        }
    }
    echo "보낸사람 : $name<br>";
    echo "날짜 : $date<br>";
    echo "쪽지내용 : $contents<br>";
    
    mysqli_close($co);
?>