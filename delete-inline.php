<?php

include 'conig.php';
$stu_id = $_GET['id'];
$sql = "DELETE FROM student WHERE sid ={$stu_id}";

$result = mysqli_query($conn, $sql) or die("query Unsuccessful");

header("Location: http://localhost/crud_html/index.php");
mysqli_close($conn);




?>