<html>
<body>
	
<?
  if($_POST["search"] == "학적" || $_POST["search"] == "학적관리") {
    echo("<script>location.replace('test1.php');</script>"); 
  } else if($_POST["search"] == "등록" || $_POST["search"] == "등록관리") {
    echo("<script>location.replace('test2.php');</script>");
  } else if($_POST["search"] == "수업" || $_POST["search"] == "수업관리") {
    echo("<script>location.replace('test3.php');</script>");
  } else if($_POST["search"] == "수강" || $_POST["search"] == "수강신청") {
    echo("<script>location.replace('attendjoin.html');</script>");
  } else if($_POST["search"] == "과목" ||$_POST["search"] == "과목조회" || $_POST["search"] == "수강과목조회") {
    echo("<script>location.replace('attendsearch.php');</script>");
  } else if($_POST["search"] == "성적" || $_POST["search"] == "성적조회") {
    echo("<script>location.replace('scoresearch.php');</script>");
  } else { 
      echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"><script>alert('잘못된 입력입니다!'); </script>"; 
      echo("<script>location.replace('main.html');</script>"); 
     }
 	

?>

</body>
</html>
    