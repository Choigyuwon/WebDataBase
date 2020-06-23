<?php
session_start();
if(isset($_SESSION["stu_no"]) && isset($_SESSION["year"])){
    session_destroy();
    $msg="<font color=blue sixe=5>Goodbye!!! (로그아웃되었습니다!!!)</font><br> ";
}
else {
    $msg="<font color=blue sixe=5>로그아웃 권한이 없습니다!!! (Goodbye!!!)</font><br>";
}
?>
<HTML>
<HEAD><TITLE>로그아웃</TITLE>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</HEAD>
<BODY link='white' vlink='white' alink='orange'>
<center>
    <?php echo $msg ?>
    <font color=blue size=3>필요하면 다시 로그인 하십시요.</font><hr>
</center><br>
<table align='center'>
    <tr>
        <td align=center bgcolor='#000099'><font color=white>
                <a href='login.html'>로그인 화면으로 가기</a></font></td>
    </tr>
</table>
</BODY>