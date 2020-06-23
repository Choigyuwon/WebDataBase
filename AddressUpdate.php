<?php
session_start();
$addressnum=$_POST['addressnum'];
$A = $_SESSION['stu_no'];
$con = mysql_connect('localhost', 'root', 'apmsetup') or die("Connection Error");
mysql_select_db('STUDENT_SYSTEM', $con) or die("Unable to connect to SQL server");
$query="update student set address='$addressnum' where `stu_no` = '$A'";
$result=mysql_query($query, $con);
include "test1.php";
?>

<script>
alert("주소가 변경되었습니다.");
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
