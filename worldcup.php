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
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



		<!-- icon -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./src/css/common.css">
    <link rel="stylesheet" type="text/css" href="./src/css/app.css">
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">



  </head>

  <body>

    <!-- navigation -->
    <? include "./semantic/nav.php"; ?>


    <!-- Page Content -->
    <div class="container">



      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="./index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">놀이터</li>
      </ol>

			<!-- Page Heading/Breadcrumbs -->
			<center>
      <h3 class="mt-4 mb-3">2018 러시아 월드컵 우승팀 예측하기<br><br>
				<img src="./images/worldcup.png">
			</h3>
		</center>
      <div id="app" align="left"></div>
      <div id="lv-container" data-id="city" data-uid="MTAyMC8zNzI3NC8xMzgwOA==">

        <script type="text/javascript">

         (function(d, s) {

             var j, e = d.getElementsByTagName(s)[0];



             if (typeof LivereTower === 'function') { return; }



             j = d.createElement(s);

             j.src = 'https://cdn-city.livere.com/js/embed.dist.js';

             j.async = true;



             e.parentNode.insertBefore(j, e);

         })(document, 'script');

        </script>

        <noscript>라이브리 댓글 작성을 위해 JavaScript를 활성화 해주세요</noscript>

        </div>
			<!-- 시티 설치 코드 끝 -->

    </div>
    <!-- /.container -->
    <!-- /.container -->

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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./src/data/data.js"></script>
    <script src="./src/components/player.js"></script>
    <script src="./src/components/game.js"></script>
    <script src="./src/components/history.js"></script>
    <script src="./src/components/modal.js"></script>
    <script src="./src/app.js"></script>
    <script>
      new app.App(document.querySelector('#app'))
    </script>
  </body>

</html>

</html>
