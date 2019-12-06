<?php
    session_start();
    $id = $_SESSION["id"];

    if($_GET["login"] == 0) {
        echo "로그인 실패";
    }
    else {
        $con = mysqli_connect("localhost","root","mirim2","php");
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $sql = "select name from members where id = '$id';";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)) {
                $name = $row['name'];
            }
        }
        mysqli_close($con);

        $cnt = 0;
        $co = mysqli_connect("10.96.120.50","php","0000","php");
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $sql = "select count(*) as 'cnt' from message_box where name = '$name' && receive = 0;";
        $result = mysqli_query($co, $sql);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)) {
                $cnt = $row['cnt'];
            }
        }
        mysqli_close($co);

        echo "로그인 성공!<br>";
        echo "<a href = 'update1.php'>회원정보수정</a><br>";
        echo "<a href = 'Message.html'>쪽지 보내기</a><br>";
        if($id == "admin") 
            echo "<a href = 'admin.html'>관리자 Page</a><br>";
        if($cnt != 0) {
            echo "쪽지가 ";
            echo "<a href = 'Message3.php?name=$name '>$cnt</a>";
            echo "통 있습니다.<br>";
        }
    }     
?>