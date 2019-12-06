<?php
    session_start();
    $subject = $_GET["subject"];

    $con = mysqli_connect("10.96.120.50","php","0000","php");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql = "select id, subject, contents, w_date, count from board where subject = '$subject';";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {

        $id = $row['id'];
        $subject = $row['subject'];
        $contents = $row['contents'];
        $date = $row['w_date'];
        $count = $row['count'];

        echo "작성자 : $id<br>";
        echo "제목 : $subject<br>";
        echo "작성일 : $date<br>";
        echo "조회수 : $count<br>";
        echo "내용 : $contents<br>";
        }
    }
    else {
         echo "저장된 데이터가 없습니다.";
    }
    mysqli_close($con);
?>