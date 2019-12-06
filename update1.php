<!doctype html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>소영이의 관리자Page</title>
    </head>
    <body>
        <form method = "POST" action = "update2.php">
            <?php
                session_start();
                $id = $_SESSION["id"];

                $con = mysqli_connect("localhost","root","mirim2","php");
                if (mysqli_connect_errno()){
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
            
                $sql = "select * from members where id = '$id';";
                $result = mysqli_query($con, $sql);
                
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_array($result)) {
                        $id = $row['id'];
                        $pw = $row['pw'];
                        $name = $row['name'];
                        $gender = $row['gender'];
                        $birth = $row['birth'];
                        $addr1 = $row['addr1'];
                        $addr2 = $row['addr2'];
                        $tel = $row['tel'];
                        $email = $row['email'];
                    }
                }
                else {
                    echo "저장된 데이터가 없습니다.";
                }
                mysqli_close($con);
            ?>
            이름&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type = "text" name = "name" size = 7 value = <?=$name?>><br>
            아이디&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type = "text" name = "id" size = 7 value = <?=$id?>> <br>
            비밀번호&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type = "password" name = "pw" size = 7 value = <?=$pw?>> <br>
            email<input type = "text" name = "email" value = <?=$email?>> <br>
            생년월일
            <input type = "text" name = "birth1" size = 6 value = <?=$birth?>>
            전화번호
            <select name = "phone1">
                <option selected = "selected">010</option>
                <option>011</option>
                <option>018</option>
            </select>
            -<input type = "text" name = "phone2" size = 4 value = <?=substr($tel, 3, 4)?>>-<input type = "text" name = "phone3" size = 4 value = <?=substr($tel, 7, 4)?>><br>
            주소<input type = "text" name = "adrress1" size = 30 value = <?=$addr1?>> 
            <input type = "submit" value = "우편번호 찾기"><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" name = "adrress2" size = 30 value = <?=$addr2?>><br>                 
            <input type = "submit" value = "확인">
        </form>
    </body>
</html>