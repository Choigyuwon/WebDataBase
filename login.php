<?php
session_start();

$stu_no=$_POST['stu_no'];
$year=$_POST['year'];

$_SESSION['stu_no']=$stu_no;
$_SESSION['year']=$year;
$con = mysql_connect('localhost', 'seventeam', '1234') or die("Connection Error");
mysql_select_db('STUDENT_SYSTEM', $con) or die("Unable to connect to SQL server");
$query="select *from `student` where `stu_no` = '$stu_no'";
$result=mysql_query($query, $con);
$row = mysql_fetch_array($result);
echo $row['pro_no'];
echo $row['stu_no'];
if ($_SESSION['stu_no']==$row['stu_no'] && $_SESSION['year']==$row['pro_pw']){
    echo "<script>alert('관리자님 환영합니다.');</script>";
    echo "<script>location.href='promain.html';</script>";
}
if($_SESSION['stu_no']==$row['stu_no'] && $_SESSION['year']==$row['year']){
    echo "<script>alert('로그인 완료');</script>";
    echo "<script>location.href='main.html';</script>";
}else {
    echo $row['stu_no'];
    echo "<br><br><center>아이디 혹은 패스워드를 확인하시기 바랍니다 :
        <a href=login.html>다시인증</a><br></center>";
}
?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
</body>
</html>
