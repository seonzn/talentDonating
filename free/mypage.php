<?
	session_start();
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

</head>


<body>

	<!-- navigation -->
	<? include "../semantic/nav2.php" ?>
	<div class="container">

		<!-- Page Heading/Breadcrumbs -->
		<h1 class="mt-4 mb-3">

		</h1>

		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="../index.php">Home</a>
			</li>
			<li class="breadcrumb-item active">내정보</li>

		</ol>

		<img src="../images/about04.jpg" height="400px" width="1100px"><br><br>


		<table cellspacing="4" cellpadding="4" class="table">



		<?
				include "../lib/dbconn.php";

				$sql = "select * from member where id='$userid'";
			$result = mysql_query($sql, $connect);


			while($row= mysql_fetch_array($result)){

			$member_intro = str_replace("\n", "<br>", $row[intro]);
			$member_intro = str_replace(" ", "&nbsp;", $member_intro);

		?>


			<tr><td>아이디</td><td> <?=$row[id]?> </td></tr>
			<tr><td>이름</td><td> <?=$row[name]?> </td></tr>
			<tr><td>생년월일</td><td> <?=$row[birth]?></td></tr>
			<tr><td>전화번호</td><td> <?=$row[hp]?></td></tr>
			<tr><td>선호과목</td><td> <?=$row[subject]?></td></tr>
			<tr><td>지역</td><td> <?=$row[area]?></td></tr>

		<tr>
			<td>소개</td><td colspan="2"> <?=$member_intro?> </td>

		</tr>


		<?
		}
		mysql_close($connect);
		?>

		</tr>
		</table>
	</div>

<br/><br/><br/><br/>





<?
	include "../lib/dbconn.php";

	$scale=10;			// 한 화면에 표시되는 글 수

    if ($mode=="search")
	{
		if(!$search)
		{
			echo("
				<script>
				 window.alert('검색할 단어를 입력해 주세요!');
			     history.go(-1);
				</script>
			");
			exit;
		}

		$sql = "select * from classboard where $find like '%$search%' order by num desc";
	}
	else
	{
		$sql = "select * from classboard where id='$userid' order by num desc";
	}

	$result = mysql_query($sql, $connect);

	$total_record = mysql_num_rows($result); // 전체 글 수

	// 전체 페이지 수($total_page) 계산
	if ($total_record % $scale == 0)
		$total_page = floor($total_record/$scale);
	else
		$total_page = floor($total_record/$scale) + 1;

	if (!$page)                 // 페이지번호($page)가 0 일 때
		$page = 1;              // 페이지 번호를 1로 초기화

	// 표시할 페이지($page)에 따라 $start 계산
	$start = ($page - 1) * $scale;

	$number = $total_record - $start;
?>
<!-- Main Content -->
<div class="container">

	<!-- Page Heading/Breadcrumbs -->
	<h1 class="mt-4 mb-3">

	</h1>

	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="../index.php">Home</a>
		</li>
		<li class="breadcrumb-item active">나의 강의게시판</li>
	</ol>

	<img src="../images/about03.jpg" height="400px" width="1100px"><br><br>
	<!--게시판 시작 -->
<table border="0" cellspacing="2" cellpadding="4" align="center" style="text-align: center;" class="table">
		<tr >

			<td>

			<h5 align="left">▷ 총 <a class="text-danger"><?= $total_record ?></a> 개의 게시물이 있습니다. </h5>

			</td>
			<td>
			    <input type="button" class="btn btn-success" value="강의목록으로이동하기" onclick="location.href='list.php'"/>
			</td>
		</tr>
</table>
<table border="0" cellspacing="2" cellpadding="4" align="center" style="text-align: center;" class="table">

<tr>
<td>번호</td>
<td>지역</td>
<td>분야</td>
<td>제목</td>
<td>글쓴이</td>
<td>등록일</td>
<td>조회수</td>
</tr>

<?
   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
   {
      mysql_data_seek($result, $i);
      // 가져올 레코드로 위치(포인터) 이동
      $row = mysql_fetch_array($result);
      // 하나의 레코드 가져오기

	  $item_num     = $row[num];
	  $item_area	= $row[area];
	  $item_branch	= $row[branch];
	  $item_id      = $row[id];

	  $item_hit     = $row[hit];

      	  $item_date    = $row[date];
	  $item_date = substr($item_date, 0, 10);

	  $item_title = str_replace(" ", "&nbsp;", $row[title]);

?>
			<tr>
				<td><?= $number ?></td>
				<td><?= $item_area?></td>
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
				<td><a href="view.php?num=<?=$item_num?>&page=<?=$page?>"><?= $item_title ?></a></td>
				<td><?= $item_id ?></td>
				<td><?= $item_date ?></td>
				<td><?= $item_hit ?></td>
			</tr>

<?
   	   $number--;
   }
?>

			<tr>
				<td colspan="7" align="center"> ◀ 이전 &nbsp;&nbsp;&nbsp;&nbsp;
<?
   // 게시판 목록 하단에 페이지 링크 번호 출력
   for ($i=1; $i<=$total_page; $i++)
   {
		if ($page == $i)     // 현재 페이지 번호 링크 안함
		{
			echo "<b> $i </b>";
		}
		else
		{
			echo "<a href='list.php?page=$i'> $i </a>";
		}
   }
?>
			&nbsp;&nbsp;&nbsp;&nbsp;다음 ▶</td>

				<tr>
				<td colspan="7" align="right">


<?
	if($userid)
	{
?>
		<input type="button" value="글쓰기" class="btn btn-success" onclick="location.href='write_form.php'"/>


<?
	}
?>

				</td>
				</tr>
	</table>


	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
<!-- Footer -->
<footer class="py-5 bg-dark">
	<div class="container">
		<p class="m-0 text-center text-white">Copyright &copy; 2018년 웹 및 앱을 위한 콘텐츠 제작 기술</p> <br>
		<p class="m-0 text-center text-white">재능기부사이트</p> <br>
		<p class="m-0 text-center text-white">20130898 김선준  20130953 이진규  20150910 박수빈</p> <br>
	</div>

</footer>

<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
