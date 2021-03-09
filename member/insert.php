<meta charset="utf-8">
<?
   $hp = $hp1."-".$hp2."-".$hp3;


   $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장
   $ip = $REMOTE_ADDR;         // 방문자의 IP 주소를 저장

   include "../lib/dbconn.php";       // dconn.php 파일을 불러옴

   $sql = "select * from member where id='$id'";
   $result = mysql_query($sql, $connect);
   $exist_id = mysql_num_rows($result);

   if($exist_id) {
     echo("
           <script>
             window.alert('해당 아이디가 존재합니다.')
             history.go(-1)
           </script>
         ");
         exit;
   }
   else
   {            // 레코드 삽입 명령을 $sql에 입력
	    $sql = "insert into member(id, pass, name, birth, hp, area, subject, intro) ";
		$sql .= "values('$id', '$pass', '$name', '$birth', '$hp', '$area', '$subject', '$intro')";

		mysql_query($sql, $connect);  // $sql 에 저장된 명령 실행
   }

   echo "
	   <script>
      window.alert('환영합니다 $id 님~~♥')
	    location.href = '../index.php';
	   </script>
	";
  mysql_close();                // DB 연결 끊기
?>
