<?php
session_start();
?>
<html>
<head>
    <title> test3</title>
            <style>
	@import url("https://fonts.googleapis.com/css?family=Indie+Flower|Lacquer&display=swap");
        h1 { font-size : 35px; color : snow;font-family: 'Lacquer', sans-serif;font-size:40px;}
        html {text-align: center; background-image:url('data:image/svg+xml,%3Csvg width="42" height="44" viewBox="0 0 42 44" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg id="brick-wall" fill="%2337474F" fill-opacity="0.5"%3E%3Cpath d="M0 0h42v44H0V0zm1 1h40v20H1V1zM0 23h20v20H0V23zm22 0h20v20H22V23z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')
		;background-color: #263238;}
        p {font-style : revert; color : white;}

	@keyframes sparkle {
    from {
        background-position: 0% 100%;
    }
    to {
        background-position: 200% 100%;
    }
}
	
.test {
    display: inline-block;
    padding: 1em;
    border-radius: 4px;
    position: relative;
}

.test:before {
    animation: sparkle 4s infinite linear;
    background: linear-gradient(90deg, #7FEFBD 0%, #FFF689 11%, #EC0B43 22%, #7FEFBD 33%, #FFF689 44%, #EC0B43 55%, #7FEFBD 66%, #FFF689 77%, #EC0B43 88%, #7FEFBD 100%);
    background-size: 300% 100%;
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    border-radius: 4px;
    filter: blur(3px);
    z-index: -1;
    transform: scale(0.99) translateY(3px);
}

    </style>
</head>
<body>
<center>
    <table>
        <br>
        <font color=white size=5><strong>성적 조회</strong></font><br><br>
        <hr width = 60%>
        <?php
        $id=$_SESSION['stu_no'];
        $table = "score";
        $con=mysql_connect('localhost','seventeam','1234');
        mysql_select_db('student_system',$con);

        $query="select * from $table where stu_no='$id'";
        $result = mysql_query($query, $con);
        $info=mysql_fetch_array($result);

        echo "<center>
        <table border=1>
      
        <tr>
        <td bgcolor=#191970><font color=white>학번</font></td><td bgcolor=white>$info[0]</td><td bgcolor=#191970><font color=white>신청학점</font></td><td bgcolor=white>$info[1]</td><td bgcolor=#191970><font color=white>취득학점</font></td><td bgcolor=white>$info[2]</td><td bgcolor=#191970><font color=white>평균학점</font></td><td bgcolor=white>$info[3]</td><td bgcolor=#191970><font color=white>수강학기</font></td><td bgcolor=white>$info[4]</td>
        </tr>      
      
 

       </table>

       </center>";





        ?>

        <tr>
            <td>
                <form method="post" action="test3.php">
                    <center><INPUT type="submit" value="뒤로가기" ></center>
                </form>
            </td>
        </tr>
    </table>
    <hr width = 60%>
</center>
</body>
</html>