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

    <?
    include "../lib/dbconn.php";

    $sql = "select * from member where id='$userid'";
    $result = mysql_query($sql, $connect);

    $row = mysql_fetch_array($result);

    $hp = explode("-", $row[hp]);
    $hp1 = $hp[0];
    $hp2 = $hp[1];
    $hp3 = $hp[2];
		$intro = str_replace("\n", "<br>", $row[intro]);
		$intro = str_replace(" ", "&nbsp;", $intro);

    mysql_close();
?>

  </head>

  <body>

		<!-- Navigation -->


		<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
			<div class="container">
				<a class="navbar-brand" href="../index.php">편-안 재능기부</a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>


				<!--검색창-->
				<form class="form-inline" method="post" action="./free/list.php">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>
						</div>
						<input class="form-control mr-sm-1" style="width:200px" name="search" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0">Search</button>
					</div>
					</form>


				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="../about.php">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../free/list.php">강의</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../review/list.php">후기</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../qna/list.php">질문및답변</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../worldcup.php">놀이터</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="../FAQ.php">고객센터</a>
						</li>
						<?
						if(!$userid)
						{
						?>	<li class="nav-item">
							<a class="nav-link" href="../member/member_form.php">회원가입</a>
						</li>
						<?
						}
						?>

						<?
						if($userid)
						{
						?>	<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								마이페이지
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
								<?
								if($userid)
								{
									?>
								<a class="dropdown-item" href="./login/logout.php">로그아웃</a>
								<a class="dropdown-item" href="../login/member_form_modify.php">정보수정</a>
								<?
								}
								?>
								<a class="dropdown-item" href="../review/myreviewpage.php">후기 관리</a>
								<a class="dropdown-item" href="../qna/myqnapage.php">나의 질문과답변</a>
							</div>
						</li>
						<?
						}
						?>


						<?
						if(!$userid)
						{
						?>	<li class="nav-item">
									<a class="nav-link" href="../login/login_form.php">로그인</a>
									</li>
						<?
						}


						else if($userid)
						{
						?>
						<li class="nav-item">
						<a href="#" class="nav-link"><?=$userid?> (<?=$username?>님)</a>
						</li>
						<li class="nav-item">
						<!--<a class="nav-link" href="./login/logout.php">로그아웃</a>-->
					</li>


						<?
						}
						?>

					</ul>
				</div>
			</div>
		</nav>




    <!-- Main Content -->
		<div class="container">
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">  </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">정보수정</li>
      </ol>

      <!-- Image Header -->
			<center>
      <img class="img-fluid rounded mb-4" src="../images/home-bg.jpg" alt="로그인화면" width="600px" height="300px">

      <center>
      <form  name="member_form" method="post" action="modify.php">
  <input type="hidden" name="title" value="회원가입 양식">
  <table border="0" width="640" cellspacing="1" cellpadding="4">
  <tr>
    <td align="right">* 아이디 </td>
    <td><?=$userid?>
    </td>

  </tr>

    <td align="right"> * 비밀번호 </td>
    <td><input type="password"  class="form-control" maxlength="12" name="pass" placeholder="비밀번호를 입력해주세요."></td>
  </tr>
  <tr>
    <td align="right"> * 비밀번호 확인 </td>
    <td><input type="password" class="form-control" maxlength="12"
                    name="pass_confirm" placeholder="비밀번호를 한번더 입력해주세요."></td>
  </tr>
<tr>
    <td align="right" > * 이름 </td>
    <td><?=$username?></td>
  </tr>
<tr>
    <td align="right">* 생년월일 </td>
    <td><input type="text" class="form-control" name="birth" maxlength="8" placeholder="<?=$row[birth]?>" >
</td>
  </tr>
<tr>
    <td align="right">* 휴대전화 </td>
    <td><select class="hp" name="hp1">
              <option value='010'>010</option>
              <option value='011'>011</option>
              <option value='016'>016</option>
              <option value='017'>017</option>
              <option value='018'>018</option>
              <option value='019'>019</option>
						</select>  - <input type="text" size="5" class="hp" name="hp2"> - <input type="text" size ="5" class="hp" name="hp3"></td>
  <tr>
    <td align="right">지역 </td>
    <td><select name="area"  class="custom-select">

           <option value="서울시">서울시</option>
           <option value="강원도">강원도</option>
           <option value="경기도">경기도</option>
           <option value="경상남도">경상남도</option>
           <option value="경상북도">경상북도</option>
           <option value="전라남도">전라남도</option>
           <option value="전라북도">전라북도</option>
           <option value="충청남도">충청남도</option>
           <option value="충청북도">충청북도</option>
        </select></td>
  </tr>

<tr>
    <td align="right">선호과목 </td>
    <td><select name="subject"  class="custom-select">

           <option value="프로그래밍">프로그래밍</option>
           <option value="문서편집">문서편집</option>
           <option value="이미지편집">이미지편집</option>
           <option value="영상편집">영상편집</option>
      <option value="기타">기타</option>
        </select></td>
  </tr>

  <tr>
    <td align="right">자기소개 </td>
    <td><textarea name="intro" class="form-control" rows="5" cols="60"><?=$intro?></textarea></td>
  </tr>
  </table>
  <br>
  <table border="0"  width="640">
     <tr><td align="right">
         <button onclick="check_input" class="btn btn-primary">저장</button>
     </tr>
  </table>
</form>
<h1 class="mt-4 mb-3">  </h1>
</center>
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
