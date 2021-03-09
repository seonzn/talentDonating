<?
	session_start();
	include "../lib/dbconn.php";

	$sql = "select * from review where num=$num";
	$result = mysql_query($sql, $connect);

	$row = mysql_fetch_array($result);
	$item_title     = $row[title];
	$item_content     = $row[content];
	$level = $row[level];
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
		<!-- Navigation -->
		<? include "../semantic/nav2.php" ?>

    <!-- Main Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">

      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">후기 게시판 수정하기</li>
      </ol>
			<img src="../images/about06.jpg" height="400px" width="1100px"><br><br>

		<center>
		<form  name="board_form" method="post" action="modify_insert.php">
			<input type="hidden" name="num" value="<?=$row[num]?>"/>
		<table border="0" width="640" cellspacing="1" cellpadding="4">
  <tr>
    <td align="right">* 작성자 </td>
    <td><?=$userid?></td>
  </tr>
  <tr>
    <td align="right"> * 제목 </td>
		<td><input type="text" maxlength="50" name="title" style="width:550px" class="form-control"  placeholder="<?=$item_title?>"></td>
  </tr>


<tr>
    <td align="right" > * 이름 </td>
    <td><?=$username?></td>
  </tr>


<tr>
    <td align="right">분야 </td>
    <td><select name="branch" class="form-control">
           <option value="p">프로그래밍</option>
           <option value="b">뷰티</option>
           <option value="i">이미지편집</option>
           <option value="v">영상편집</option>
	   <option value="h">헬스(건강)</option>
	   <option value="e">엔터테인먼트</option>
	   <option value="etc">기타</option>
        </select></td>
  </tr>


  <tr>
    <td align="right">내용 </td>
    <td><textarea class="form-control" name="content" rows="20" cols="60" ></textarea></td>
  </tr>
  </table>

  <br>
  <table border="0"  width="640">
     <tr><td align="right">
         <button onclick="check_input" class="btn btn-primary">저장</button>
         <input type="button" value="돌아가기" class="btn btn-primary" onclick="history.back()"></td>
     </tr>
  </table>
</form>



</body>
</html>
