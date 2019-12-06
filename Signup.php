<?php
    $name = $_POST["name"];
    $id = $_POST["id"];
    $pw = $_POST["pw"];
    $pw_again = $_POST["pwAgain"];
    $email = $_POST["email"];
    $birth1 = $_POST["birth1"];
    $birth2 = $_POST["birth2"];
    $phone1 = $_POST["phone1"];
    $phone2 = $_POST["phone2"];
    $phone3 = $_POST["phone3"];
    $address1 = $_POST["adrress1"];
    $address2 = $_POST["adrress2"];

    echo "아이디 : $id<br>";
    if($pw == $pw_again)
        echo "비밀번호 : $pw<br>";
    else 
        echo "비밀번호 오류";
    echo "이름 : $name<br>";
    echo "이메일 : $email<br>";
    if($birth2 == 1 || $birth2 == 2) {
        $age = date("Y") - (1900 + substr($birth1, 0, 2)) + 1;
        $year = 1900 + substr($birth1, 0, 2);
    }
    else {
        $age = date("Y") - (2000 + substr($birth1, 0, 2)) + 1;
        $year = 2000 + substr($birth1, 0, 2);
    }
    $month = substr($birth1, 2, 2);
    $date = substr($birth1, 4, 2);
    echo "나이 : $age<br>";
    if($birth2 == 1 || $birth2 == 3) 
        $gender = "남";
    else   
        $gender = "여";
    echo "성별 : $gender<br>";
    echo "생년월일 : ${year}년 ${month}월 ${date}일<br>";
    echo "전화번호 : $phone1 - $phone2 - $phone3<br>";
    echo "주소 : $address1 $address2<br>";

    $con = mysqli_connect("localhost","root","mirim2","php");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql = "insert into members (name, id, pw, birth, addr1, addr2, tel, email, gender, age) values ('$name', '$id', '$pw', '$birth1', '$address1', '$address2', '$phone1.$phone2.$phone3', '$email', '$gender', $age);";
    $result = mysqli_query($con, $sql);
    if(!$result) {
        echo "데이터 입력에 실패하였습니다.";
    }
?>