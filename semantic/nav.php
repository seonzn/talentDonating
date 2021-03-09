<!-- Navigation -->


<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">편-안 재능기부</a>
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
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./free/list.php">강의</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./review/list.php">후기</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./qna/list.php">질문및답변</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="worldcup.php">놀이터</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="FAQ.php">고객센터</a>
        </li>
        <?
        if(!$userid)
        {
        ?>	<li class="nav-item">
          <a class="nav-link" href="./member/member_form.php">회원가입</a>
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

            <a class="dropdown-item" href="./login/member_form_modify.php">정보수정</a>
            <a class="dropdown-item" href="./free/mypage.php">내정보 / 강의 관리</a>
            <?
            }
            ?>

            <a class="dropdown-item" href="./review/myreviewpage.php">후기 관리</a>
            <a class="dropdown-item" href="./qna/myqnapage.php">나의 질문과답변</a>
          </div>
        </li>
        <?
        }
        ?>


        <?
        if(!$userid)
        {
        ?>	<li class="nav-item">
              <a class="nav-link" href="./login/login_form.php">로그인</a>
              </li>
        <?
        }


        else if($userid)
        {
        ?>
        <li class="nav-item">
        <a href="#" class="nav-link"><?=$userid?><br> (<?=$username?>님)</a>
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
