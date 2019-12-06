
<?php
    session_start();
    $id = $_SESSION["id"];
    $con = mysqli_connect("localhost","root","mirim2","php");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql = "select name from members where id = '$id';";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
            $w_name = $row['name'];
        }
    }

    $name = $_POST["receive"];
    $contents = $_POST["contents"];
    $date = date("Y-m-d h:i:s", time());

    $con = mysqli_connect("10.96.120.50","php","0000","php");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql = "insert into message_box (name, contents, date, w_name, receive) values 
            ('$name', '$contents', '$date', '$w_name', 0);";
    mysqli_query($con, $sql);

    mysqli_close($con);

    echo "<a href='Login3.php?login=1 '>쪽지전송을 성공했습니다.</a>";
?>