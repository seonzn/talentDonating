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

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- icon -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body>

    <!-- navigation -->
    <? include "./semantic/nav.php"; ?>


    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">FAQ
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">FAQ</li>
      </ol>

      <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Q1. 저도 재능기부를 하고 싶은데, 강의는 어떻게 올리는거죠?</a>
            </h5>
          </div>

          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
              A. 저희 재능기부 서비스는 튜터와 튜티의 구분이 없는 양방향 서비스입니다. 그렇기 때문에 상단 강의 탭에 가셔서 원하는 카테고리 선택 후 우측 하단에 등록 버튼을 눌러 강의를 등록해주시면 됩니다.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Q2. 제가 지금까지 어떤 강의를 배웠고, 등록했는지 알고싶습니다. 어떻게 하면 될까요?
              </a>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-body">
              A. 저희 서비스는 회원님의 수강 강의 및 등록강의를 총괄하여 관리하고 있습니다. 우측 상단 마이페이지에 수강 관리 탭에 들어가시면 회원님의 강의 정보를 모두 열람해보실 수 있습니다.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingThree">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Q3. 제가 신청한 강의가 있는데, 갑작스럽게 듣지 못하게 되었습니다. 어떻게 하면 되죠?</a>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="card-body">
              A. 갑작스러운 사유로 강의를 수강하지 못하는 경우, 아직 등록되지 않은 강의인 경우 수강신청 신청댓글을 삭제해주시면 되고, 등록이 마감된 댓글의 경우 해당 강사님께 직접 연락하셔서 조치를 취해주셔야 합니다.
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">찾아오시는 길

      </h1>



      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3170.4149348195515!2d126.92647581512132!3d37.380018379833274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b673a25fd676d%3A0x4aa9507c62217d70!2z7ISx6rKw64yA7ZWZ6rWQ!5e0!3m2!1sen!2skr!4v1528450027391" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>성결대학교</h3>
          <p>
						경기도 안양시 만안구 안양동 성결대학로 53

            <br>성결관 4층 컴퓨터공학부
            <br>
          </p>
          <p>
            <abbr title="Phone">P</abbr>: (123) 456-7890
          </p>
          <p>
            <abbr title="Email">E</abbr>:
            <a href="mailto:jinkyu0928@naver.com">jinkyu0928@naver.com
            </a>
          </p>

        </div>
      </div>
      <!-- /.row -->
			<div>

			</div>
      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <!-- <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Send us a Message</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <!-- <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
          </form>
        </div>

      </div> -->
      <!-- /.row -->

			<!-- 라이브리 시티 설치 코드 -->

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

  </body>

</html>
