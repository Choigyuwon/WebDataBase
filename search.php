<html>
<body>
	
<?
  if($_POST["search"] == "����" || $_POST["search"] == "��������") {
    echo("<script>location.replace('test1.php');</script>"); 
  } else if($_POST["search"] == "���" || $_POST["search"] == "��ϰ���") {
    echo("<script>location.replace('test2.php');</script>");
  } else if($_POST["search"] == "����" || $_POST["search"] == "��������") {
    echo("<script>location.replace('test3.php');</script>");
  } else if($_POST["search"] == "����" || $_POST["search"] == "������û") {
    echo("<script>location.replace('attendjoin.html');</script>");
  } else if($_POST["search"] == "����" ||$_POST["search"] == "������ȸ" || $_POST["search"] == "����������ȸ") {
    echo("<script>location.replace('attendsearch.php');</script>");
  } else if($_POST["search"] == "����" || $_POST["search"] == "������ȸ") {
    echo("<script>location.replace('scoresearch.php');</script>");
  } else { 
      echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"><script>alert('�߸��� �Է��Դϴ�!'); </script>"; 
      echo("<script>location.replace('main.html');</script>"); 
     }
 	

?>

</body>
</html>
    