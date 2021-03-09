<?

   session_start();

   include "../lib/dbconn.php";

   $sql = "delete from reply where num = $num";
   mysql_query($sql, $connect);

   mysql_close();
?>
<meta charset="utf-8">
<?
   echo "

	   <script>
	    alert('삭제가 완료되었습니다.');
	    location.href = 'list.php';
	   </script>
	";
?>
