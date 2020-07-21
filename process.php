<?php
     $conn=mysqli_connect("localhost", "root", "adsdads1");
     mysqli_select_db($conn, "opentutorials");
     $result=mysqli_query($conn, "SELECT * FROM topic");
     $sql="INSERT INTO topic(title,description,author,created)VALUES('".$_POST['title']."','".$_POST['description']."','".$_POST['author']."',  now())";
     $result=mysqli_query($conn, $sql);
     header("Location: http://localhost/index.php");
?>