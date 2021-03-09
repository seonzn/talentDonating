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
      <h1 class="mt-4 mb-3">

      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Services</li>
      </ol>

      <!-- Image Header -->
      <center>
      <img class="img-fluid rounded mb-4" src="../images/home-bg.jpg" alt="로그인화면" width="600px" height="300px">

      <form  name="member_form" method="post" action="login.php">
    <table border="0" width="640" cellspacing="1" cellpadding="4">
      <tr>
        <td align="right"> * 아이디   </td>
        <td><input type="text" class="form-control" name="id" size="20" placeholder="아이디"/></td>
      </tr>

      <tr>
        <td align="right"> * 비밀번호 </td>
        <td><input type="password" class="form-control" name="pass" size="21" placeholder="패스워드"/></td>
      </tr>


    </table>
    <table border="0"  width="640">
       <tr><td align="right">
         <button type="submit" class="btn btn-primary">로그인</button> &nbsp;
         아직 회원이 아니세요? <a href="../member/member_form.php">회원가입</a>
    </table>

  </form>
  </center>
  </div>

  <h1 class="mt-4 mb-3">

  </h1>
  <br><br><br>


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
