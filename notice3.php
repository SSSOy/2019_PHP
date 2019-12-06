<script>
    alert("등록되었습니다.");
</script>

<?php
    session_start();
    $id = $_SESSION["id"];
    $subject = $_POST["subject"];
    $contents = $_POST["contents"];
    $date = date("Y-m-d", time());

    $con = mysqli_connect("10.96.120.50","php","0000","php");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql = "insert into board (id, subject, contents, w_date) values ('$id', '$subject', '$contents', '$date');";
    mysqli_query($con, $sql);

    mysqli_close($con);
?>
