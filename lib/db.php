<?php
function db_init($host, $duser, $dpw, $dname){
  $conn=mysqli_connect($host, $duser, $dpw, $dname);
  mysqli_select_db($conn, "opentutorials");
  return $conn;
}
?>