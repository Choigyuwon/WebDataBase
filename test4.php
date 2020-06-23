<?
$sn=$_POST["sn"];
$sr=$_POST["sr"];
$sg=$_POST["sg"];
$sa=$_POST["sa"];
$st=$_POST["st"];

$table="score";
$con = mysql_connect('localhost', 'seventeam', '1234')
	or die("Connection Error");
mysql_select_db('student_system', $con)
	or die("Unable to connect to SQL server");
   
$query = "insert into $table values('$sn','$sr','$sg','$sa','$st')";
$result = mysql_query($query, $con);
mysql_close($con);
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"><script> alert('입력완료');</script>";
echo "<script>location.href='test4.html';</script>";

?>