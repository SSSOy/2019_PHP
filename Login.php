<!doctype html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>Cookie</title>
    </head>
    <body>
        <form method = "POST" action = "Login2.php">
            <?php
                if(isset($_COOKIE["userid"])) {
                    $id = $_COOKIE["userid"];
                    echo "ID<input type = 'text' name = 'id' value = $id> <br>";
                }
                else
                    echo "ID<input type = 'text' name = 'id'> <br>";
            ?>
            PW<input type = "password" name = "pw"> <br>
            <input type = "submit" value = "확인">
            <input type = "checkbox" name = "save" value = "save">아이디 저장<br>
        </form>
    </body>
</html>