<?php
    $conn=mysqli_connect("localhost", "root", "adsdads1");
    mysqli_select_db($conn, "opentutorials");
    $name=mysqli_real_escape_string($conn, $_GET['name']);
    $password=mysqli_real_escape_string($conn, $_GET['password']);
    $sql="SELECT * FROM user WHERE name='".$name."' AND password='".$password."'";
    $result=mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
</head>
<body>
     <?php
         $password = $_GET["password"];
         if($result->num_rows=="0"){
            echo "비밀번호가 틀립니다";
         }else{
            echo "환영합니다";
         }
     ?>
</body>
</html>