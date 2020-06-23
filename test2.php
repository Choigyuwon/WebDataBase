<?php
session_start();
$id=$_SESSION['stu_no'];
$table = "apply";
$con=mysql_connect('localhost','seventeam','1234');
mysql_select_db('student_system',$con);

$query="select * from $table where stu_no='$id'";
$result = mysql_query($query, $con);
?>
<span style="font-size:50px;cursor:pointer; color: white;font-family: '휴먼편지체'" onclick="openNav()">&#9776; MENU</span>
<hr>
<?php
$info=mysql_fetch_array($result);
echo "<center>
        <table border=1>
        <br>
        <font color=white size=5><strong> 등록관리 </strong></font><br><br>
      
        <tr>
        <td bgcolor=#191970><font color=white>학번</font></td><td bgcolor=white>$info[0]</td><td bgcolor=#191970><font color=white>등록 날짜</font></td><td bgcolor=white>$info[1]</td><td bgcolor=#191970><font color=white>납부총액</font></td><td bgcolor=white>$info[3]</td>
        </tr>      
      
 

       </table>

       </center>";




?>
<html>
<head>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Indie+Flower|Lacquer&display=swap");
        h1 { font-size : 35px; color : snow;font-family: 'Lacquer', sans-serif;font-size:40px;}
        html { background-image:url('data:image/svg+xml,%3Csvg width="42" height="44" viewBox="0 0 42 44" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg id="brick-wall" fill="%2337474F" fill-opacity="0.5"%3E%3Cpath d="M0 0h42v44H0V0zm1 1h40v20H1V1zM0 23h20v20H0V23zm22 0h20v20H22V23z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')
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
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
  .myButton {
        box-shadow:inset 0px -3px 7px 0px #29bbff;
        background:linear-gradient(to bottom, #2dabf9 5%, #0688fa 100%);
        background-color:#2dabf9;
        border-radius:3px;
        border:1px solid #0b0e07;
        display:inline-block;
        cursor:pointer;
        color:#ffffff;
        font-family:Arial;
        font-size:15px;
        padding:9px 23px;
        text-decoration:none;
        text-shadow:0px 1px 0px #263666;
    }
    .myButton:hover {
        background:linear-gradient(to bottom, #0688fa 5%, #2dabf9 100%);
        background-color:#0688fa;
    }
    .myButton:active {
        position:relative;
        top:1px;
    }
    .color{
		color:white;
		background:#191970;
}
    </style>
</head>
<body>
<div id="mySidenav" class="sidenav">
    <div style="color : white;">
    <?php echo $_SESSION['stu_no']; ?>님 환영합니다.
    </div>
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <br>
    <form method="post" action="search.php">
        <INPUT type="text" size=20 name="search" style="height: 30px"><INPUT type="submit" value="검색" style="height: 30px;">
    </form>
    <br><br><br><br>
    <a href="test1.php">학적관리</a>
    <br>
    <a href="test2.php">등록관리</a>
    <br>
    <a href="test3.php">수업관리</a>
    <br>
    <a href="attendjoin.html">수강신청</a>
    <br>
    <a href="logout.php">로그아웃</a>
</div>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
<center>
    <br>
    <tr>
        <td>
            <form method="post" action="main.html">
                <INPUT type="submit" value="뒤로가기"class="myButton" >
            </form>
        </td>
    </tr>
</center>
</body>
</html>

