<?
	session_start();





?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>편-안 재능기부 사이트</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- icon -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body>

		<!-- navigation -->
		<? include "./semantic/nav.php"; ?>

		<header>
		<? include "./semantic/header.php"; ?>
	 </header>

	 <!-- Page Content -->
	 <div class="container">
		 <!-- 최근 올라온 강좌-->
		 <h1 class="my-4">최근 올라온 강좌</h1>
<?
	include "./lib/dbconn.php";
$sql = "select * from classboard order by num desc limit 3";
$result = mysql_query($sql,$connect);

while($row = mysql_fetch_array($result)){
	$title = $row[title];
  $item_num = $row[num];
	$item_branch = $row[branch];
	$item_content = str_replace("\n", "<br>", $row[content]);
	$item_content = str_replace(" ", "&nbsp;", $item_content);
	?>
		 <!-- Marketing Icons Section -->
		 <div class=""  style=" width=40%;">
			 <div class="col-lg-4 mb-4" style="float: left; width=30%; padding:10px">
				 <div class="card h-100">
					 <h4 class="card-header">분야 :
						 <?
						 if($item_branch=="p"){
						 ?>
						 <td><a class="text-success">프로그래밍</a></td>
						 <?
						 }elseif($item_branch=="b"){
						 ?>
						 <td><a class="text-success">뷰티</a></td>
						 <?
						 }elseif($item_branch=="i"){
						 ?>
						 <td><a class="text-success">이미지편집</a></td>
						 <?
						 }elseif($item_branch=="v"){
						 	?>
						 	<td><a class="text-success">영상편집</a></td>
						 	<?
						 }elseif($item_branch=="h"){
						 	?>
						 	<td><a class="text-success">헬스(건강)</a></td>
						 	<?
						 }elseif($item_branch=="e"){
						 	?>
						 	<td><a class="text-success">엔터테인먼트</a></td>
						 	<?
						 }elseif($item_branch=="etc"){
						 	?>
						 	<td><a class="text-success">기타</a></td>
						 	<?
						 }
						 ?>
						 <br><br> <?=$title?> &nbsp;&nbsp;
					  </h4>
					 <div class="card-body">
						 <p class="card-text"><?=$item_content?></div>
					 <div class="card-footer">
						 <a href="free/view.php?num=<?=$item_num?>" class="btn btn-primary">강의 바로가기</a>
					 </div>
				 </div>
			 </div>
			 </div>
			 <?
		 }?>


			  <!-- <div class="col-lg-4 mb-4">
				 <div class="card h-100">
					 <h4 class="card-header">Card Title</h4>
					 <div class="card-body">
						 <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
					 </div>
					 <div class="card-footer">
						 <a href="#" class="btn btn-primary">Learn More</a>
					 </div>
				 </div>
			 </div>
			 <div class="col-lg-4 mb-4">
				 <div class="card h-100">
					 <h4 class="card-header">Card Title</h4>
					 <div class="card-body">
						 <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
					 </div>
					 <div class="card-footer">
						 <a href="#" class="btn btn-primary">Learn More</a>
					 </div>
				 </div>
			 </div> -->

		 <!-- /.row -->
<hr>
<br>
<br>
<hr>
		 <!-- 분야별 강좌 -->
		 <h2>분야별 강좌</h2>
<hr>
		 <div class="row">
			 <div class="col-lg-4 col-sm-6 portfolio-item">
				 <div class="card h-100">
					 <a href="#"><img class="card-img-top" src="./images/category01.jpg" alt=""></a>
					 <div class="card-body">
						 <h4 class="card-title">
							 <a href="free/list.php">프로그래밍</a>
						 </h4>
						 <p class="card-text">C,JAVA 등의 프로그래밍 언어 학습을 통해 프로그래밍 능력을 숙달합니다<br/>
							 <? $sql = "select * from classboard where branch='p'";
							    $result=mysql_query($sql,$connect);
									$count = mysql_num_rows($result);
									?><br>
									<h5 >등록된 강좌 :<a class="text-danger"> <?=$count?></a>건</h5>
						 </p>

					 </div>
				 </div>
			 </div>

			 <div class="col-lg-4 col-sm-6 portfolio-item">
				 <div class="card h-100">
					 <a href="#"><img class="card-img-top" src="./images/category06.jpg" alt=""></a>
					 <div class="card-body">
						 <h4 class="card-title">
							 <a href="free/list.php">뷰티</a>
						 </h4>
						 <p class="card-text">몸매 관리와 함께 아름다운 피부 유지도 필수인 지금! 기초 메이크업, 눈화장 법 등 다양한 메이크업 스킬 및
   올바른 피부관리법을 습득할 수 있습니다.</p>
	 <? $sql = "select * from classboard where branch='b'";
			$result=mysql_query($sql,$connect);
			$count = mysql_num_rows($result);
			?><br>
	 <br>
	 <h5 >등록된 강좌 :<a class="text-danger"> <?=$count?></a>건</h5>
					 </div>
				 </div>
			 </div>



			 <div class="col-lg-4 col-sm-6 portfolio-item">
				 <div class="card h-100">
					 <a href="#"><img class="card-img-top" src="./images/category02.png" alt=""></a>
					 <div class="card-body">
						 <h4 class="card-title">
							 <a href="free/list.php">영상편집</a>
						 </h4>
						 <p class="card-text">Adobe After Effect, Premier 등 영상 편집툴을 이용하여 다양한 편집 기술을 습득합니다.</p>
						 <? $sql = "select * from classboard where branch='v'";
								$result=mysql_query($sql,$connect);
								$count = mysql_num_rows($result);
								?><br>
						 <br>
						 <h5 >등록된 강좌 :<a class="text-danger"> <?=$count?></a>건</h5>
					 </div>
				 </div>
			 </div>


			 <div class="col-lg-4 col-sm-6 portfolio-item">
				 <div class="card h-100">
					 <a href="#"><img class="card-img-top" src="./images/category03.jpg" alt=""></a>
					 <div class="card-body">
						 <h4 class="card-title">
							 <a href="free/list.php">헬스</a>
						 </h4>
						 <p class="card-text">건강하고 탄탄한 신체 유지를 위해 정확한 운동법을 배우며 규칙적인 운동습관을 기릅니다.</p>
						 <br>
						 <? $sql = "select * from classboard where branch='h'";
								$result=mysql_query($sql,$connect);
								$count = mysql_num_rows($result);
								?><br>
						 <h5 >등록된 강좌 :<a class="text-danger"> <?=$count?></a>건</h5>
					 </div>
				 </div>
			 </div>


			 <div class="col-lg-4 col-sm-6 portfolio-item">
				 <div class="card h-100">
					 <a href="#"><img class="card-img-top" src="./images/category04.jpg" alt=""></a>
					 <div class="card-body">
						 <h4 class="card-title">
							 <a href="free/list.php">엔터테인먼트</a>
						 </h4>
						 <p class="card-text">게임, 음악 믹싱 등 다양한 분야의 엔터테인먼트적 기술을 쉽게 배우고, 함께 즐길 수 있습니다.</p>
						 <br>
						 <? $sql = "select * from classboard where branch='e'";
								$result=mysql_query($sql,$connect);
								$count = mysql_num_rows($result);
								?><br>
						 <h5 >등록된 강좌 :<a class="text-danger"> <?=$count?></a>건</h5>
					 </div>
				 </div>
			 </div>
			 <div class="col-lg-4 col-sm-6 portfolio-item">
				 <div class="card h-100">
					 <a href="#"><img class="card-img-top" src="./images/category05.jpg" alt=""></a>
					 <div class="card-body">
						 <h4 class="card-title">
							 <a href="free/list.php">과학</a>
							 </h4>
							 <? $sql = "select * from classboard where branch='etc'";
							    $result=mysql_query($sql,$connect);
									$count = mysql_num_rows($result);
									?><br>
						 <p class="card-text">쉽게 접하기 힘든 물리, 생명과학 등 여러가지 학습을 통해 이해력을 상승시키고 재밌게 습득할 수 있는 법을 배웁니다.</p>
						 <br>
						 <h5 >등록된 강좌 :<a class="text-danger"> <?=$count?></a>건</h5>
					 </div>
				 </div>
			 </div>
</div>
		 <!-- /.row -->

		 <hr>
		 <br>
		 <!-- Features Section -->
		 <div class="row">
			 <div class="col-lg-6">
				 <h2><a class="text-danger">회원</a>이 되어보세요!</h2><br>
				 <h5> &nbsp; &nbsp;회원으로 누릴 수 있는 <a class="text-success"> 혜택</a>  <img src="./images/threefingers.png" width="40px"></h5>
				 <ul>
					 <li>다양한 분야의 재능 기부 </li><br>
					 <li>지역 및 분야별로 올라오는 강의 신청 가능</li> <br>
					 <li>수강 중 또는 이후에도 지속적인 피드백 가능</li> <br>

				 </ul>

			 </div>
			 <div class="col-lg-6" ml-3>
				 <img class="img-fluid rounded" src="./images/main07.jpg" alt="">
			 </div>
		 </div>
		 <!-- /.row -->

		 <hr>
		 <br>
		 <!-- Call to Action Section -->
		 <div class="row mb-4">
			 <div class="col-md-8">
				 <h3 align="right">당신의 <a class="text-primary">재능</a>을 지금 바로 뽐내보세요!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <img src="./images/right.png" width="35px"></h3>
			 </div>
			 <div class="col-md-4">
				 <a  align="center"class="btn btn-lg btn-secondary btn-block" href="./member/member_form.php">회원가입 하기</a>
			 </div>
		 </div>

	 </div>
	 <!-- /.container -->


    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; 2018년 웹 및 앱을 위한 콘텐츠 제작 기술</p> <br>
        <p class="m-0 text-center text-white">재능기부사이트</p> <br>
        <p class="m-0 text-center text-white">20130898 김선준  20130953 이진규  20150910 박수빈</p> <br>
      </div>

    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
