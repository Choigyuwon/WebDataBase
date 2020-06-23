<?php
$b1=$_POST["testselect"];
session_start();
$date=date("Y-m-d");
$id=$_SESSION['stu_no'];
$table = "attend";
$con=mysql_connect('localhost','seventeam','1234');
mysql_select_db('student_system',$con);

$query="insert into $table values('$id','$b1','2020','1','1','1','1','3','1','1','$date')";
$result = mysql_query($query, $con);
mysql_close($con);
echo"<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"><script> alert('입력완료');</script>";
echo"<script>location.href='attendjoin.html';</script>";
?>