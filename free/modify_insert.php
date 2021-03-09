<? session_start();
    // include "../lib/dbconn.php";

	// $sql = "select * from classboard where num=$num";
	// $result = mysql_query($sql, $connect);
  //
	// $row = mysql_fetch_array($result);
	// $passwd_confirm = $row[passwd];



?>
<meta charset="utf-8">
<?
	if(!$userid) {
		echo("
		<script>
	     window.alert('로그인 후 이용해 주세요.')
	     history.go(-1)
	   </script>
		");
		exit;
	}else{


	$date = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장
	include "../lib/dbconn.php";       // dconn.php 파일을 불러옴




		$sql  = "update classboard set title='$title', area='$area', branch='$branch', content='$content' , level='$level', stnum='$stnum' where num=$num";
    mysql_query($sql, $connect);  // $sql 에 저장된 명령 실행
    mysql_close();                // DB 연결 끊기
}
    echo "

	   <script>
	    alert('수정이 완료되었습니다!');
	    location.href = 'list.php?page=$page';
	   </script>
	";






?>
