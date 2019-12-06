<?php
    $name = $_POST["name"];
    $id = $_POST["id"];
    $pw = $_POST["pw"];
    $email = $_POST["email"];
    $birth1 = $_POST["birth1"];
    $phone1 = $_POST["phone1"];
    $phone2 = $_POST["phone2"];
    $phone3 = $_POST["phone3"];
    $address1 = $_POST["adrress1"];
    $address2 = $_POST["adrress2"];

    $con = mysqli_connect("localhost","root","mirim2","php");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $sql = "update members set name = '$name', id = '$id', pw = '$pw', email = '$email', birth = '$birth1',
                                tel = '$phone1$phone2$phone3', addr = '$address1 $address2' where id = '$id';";
    mysqli_query($con, $sql);

    echo "수정이 완료되었습니다.<br>";

    mysqli_close($con);
?>