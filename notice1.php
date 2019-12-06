<?php
    $con = mysqli_connect("10.96.120.50","php","0000","php");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql = "select id, subject, w_date, count from board";
    $result = mysqli_query($con, $sql);

    echo "<pre>아이디         제목           날짜         조회수<br></pre>";

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
            $id = $row['id'];
            $subject = $row['subject'];
            $date = $row['w_date'];
            $count = $row['count'];

            echo "<pre>$id       <a href='notice4.php?subject=$subject '>$subject</a>       $date        $count</pre>";
        }
    }
    else {
         echo "저장된 데이터가 없습니다.";
    }
    mysqli_close($con);
?> 