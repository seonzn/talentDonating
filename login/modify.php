<?
	session_start();
?>
<meta charset="euc-kr">
<?
   $hp = $hp1."-".$hp2."-".$hp3;

   $regist_day = date("Y-m-d (H:i)");  // ������ '��-��-��-��-��'�� ����

   include "../lib/dbconn.php";       // dconn.php ������ �ҷ���

   $sql = "update member set pass='$pass',  ";
   $sql .= "birth='$birth', hp='$hp', area='$area', subject='$subject', intro='$intro' where id='$userid'";

   mysql_query($sql, $connect);  // $sql �� ����� ��� ����

   mysql_close();                // DB ���� ����
   echo "
	   <script>
	    location.href = '../index.php';
	   </script>
	";
?>

   
