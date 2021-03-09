<?
	session_start();

	include "../lib/dbconn.php";

	$sql = "select * from qna where num=$num";
	$result = mysql_query($sql, $connect);

    $row = mysql_fetch_array($result);
      // 하나의 레코드 가져오기

	$item_num     = $row[num];
	$item_id      = $row[id];

	$item_hit     = $row[hit];

    	$item_date    = $row[regist_day];


	$item_title = str_replace(" ", "&nbsp;", $row[title]);
	$item_name = $row[name];

	$item_branch=$row[branch];

	$item_content = str_replace("\n", "<br>", $row[content]);
	$item_content = str_replace(" ", "&nbsp;", $item_content);


$item_passwd = $row[passwd];

	$new_hit = $item_hit + 1;

	$sql = "update qna set hit=$new_hit where num=$num";   // 글 조회수 증가시킴
	mysql_query($sql, $connect);
?>
<!DOCTYPE html>
<html lang="ko">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>편-안 재능기부 사이트</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/modern-business.css" rel="stylesheet">

    <!-- icon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="../css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">

		<script>
		    function del(href)
		    {
		        if(confirm("한번 삭제한 자료는 복구할 방법이 없습니다.\n\n정말 삭제하시겠습니까?")) {
		                document.location.href = href;
		        }
		    }
		</script>


  </head>

  <body>
		<!-- navigation -->
		<? include "../semantic/nav2.php"; ?>

    <!-- Main Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">

      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Q&A 게시판</li>
      </ol>
				<img src="../images/about01.jpg" height="400px" width="1100px"><br><br>
			<center>
			<table border="0" class="table">
				<tr>
					<td align="left" width="50px">* 작성자</td>
					<td colspan="5"><?=$item_id?></td>
				</tr>
				<tr>
					<td align="left">* 제목</td>
					<td><?=$item_title?></td>
				</tr>


				<tr>
					<td align="left">* 분야</td>
					<?
					if($item_branch=="p"){
					?>
					<td>프로그래밍</td>
					<?
				}elseif($item_branch=="b"){
					?>
					<td>뷰티</td>
					<?
				}elseif($item_branch=="i"){
					?>
					<td>이미지편집</td>
					<?
				}elseif($item_branch=="v"){
						?>
						<td>영상편집</td>
						<?
					}elseif($item_branch=="h"){
						?>
						<td>헬스(건강)</td>
						<?
					}elseif($item_branch=="e"){
						?>
						<td>엔터테인먼트</td>
						<?
					}elseif($item_branch=="etc"){
						?>
						<td>기타</td>
						<?
					}
					?>
				</tr>


				<tr>
					<td align="left">* 내용</td>
					<td width="420"><?=$item_content?></td>
				</tr>

			</table>


			<input type="button" name="button"  class="btn btn-primary" value="목록" onclick="location.href='list.php?page=<?=$page?>'"/>
			&nbsp;
<?
if($userid==$item_id || $userlevel==1 || $userid=="admin")
{
?>
			<input type="button" name="button"  class="btn btn-primary"  value="수정"
				onclick="location.href='modify_form.php?num=<?=$num?>&page=<?=$page?>'"/>&nbsp;

			<button onclick="javascript:del('delete.php?num=<?=$num?>')"  class="btn btn-primary">삭제</button>&nbsp;

<?
}
?>
<?
if($userid )
{
?>
			<input type="button" value="글쓰기"  class="btn btn-primary" onclick="location.href='write_form.php'"/>
<?
}
?>

<? if($userid){?>
	<table border="0" width="1100px" cellspacing="1" cellpadding="4">
	<form  name="reply_form" method="post" action="reply_insert.php">

		<tr>
			<td><img src="../images/person.png" width="45px">&nbsp;<?=$userid?>님</td>
			<td><textarea name="replycontent" rows="5" cols="100" class="form-control"></textarea></td>
			<td><input type="submit" class="btn btn-success"  value="댓글 쓰기"/></td>
		</tr>
	 <br/><br/>
		<input type="hidden" name="num" value="<?=$num?>">
		<input type="hidden" name="page" value="<?=$page?>">

	</form>
	</table>
		<?}?>
		<br/><br/>


<table border="0" cellspacing="4" cellpadding="4" class="table" >
<tr>

<?

    $sql = "select * from qnareply where linkno=$num";
	$result = mysql_query($sql, $connect);


	while($row= mysql_fetch_array($result)){
	$reply_id = $row[id];
	$reply_num = $row[num];
	$reply_content = str_replace("\n", "<br>", $row[content]);
	$reply_content = str_replace(" ", "&nbsp;", $reply_content);

?>


<td rowspan="2"> <?=$reply_id?> </td>
<td rowspan="2"> <?=$row[content]?>  </td></tr>
<tr>
<td colspan="2" align="right"> <?=$row[date]?><a href="reply_delete.php?num=<?=$reply_num?>">&nbsp;삭제</a> </td>
<td><? if($userid == $reply_id){
	?>

<?
}
?>
</td>
</tr>


<?
}
mysql_close($connect);
?>

</tr>
</table>
</center>
<br><br><br><br>
</div>
<!-- Footer -->
<footer class="py-5 bg-dark">
	<div class="container">
		<p class="m-0 text-center text-white">Copyright &copy; 2018년 웹 및 앱을 위한 콘텐츠 제작 기술</p> <br>
		<p class="m-0 text-center text-white">재능기부사이트</p> <br>
		<p class="m-0 text-center text-white">20130898 김선준  20130953 이진규  20150910 박수빈</p> <br>
	</div>
	<!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
