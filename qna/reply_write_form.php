<?
	session_start();

	include "../lib/dbconn.php";


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="utf-8">
</head>

<body>


		<form  name="reply_form" method="post" action="reply_insert.php">
		<table border="0" width="640" cellspacing="1" cellpadding="4">
  <tr>
    <td><?=$userid?></td>
    <td><textarea name="content" rows="5" cols="60"></textarea></td>
  </tr>

  <table border="0"  width="640">
     <tr><td align="right">
         <input type="submit" value="댓글 쓰기"/>
         <input type="button" value="돌아가기" onclick="location.href('reply_view.php')"></td>
     </tr>
  </table>
</form>

</body>
</html>
