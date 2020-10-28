<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="../assets/css/discussion.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<style>
		.quesBoard{
			background-image: linear-gradient(to top, rgb(100, 158, 150),rgb(228, 224, 224));
		}
	</style>
	<title>Course3801-Discussion Board</title>
</head>
<body>
<box>
	<nav>
		<a href="#" target="_self"><img id="logo" src="../assets/images/SmartED.png" width="200px" height="46px"></a>
		<select>
			<option value ="DECO3801">DECO3801</option>
			<option value ="COMP3301">COMP3301</option>
			<option value="COMP3506">COMP3506</option>
			<option value="DECO2800">DECO2800</option>
		</select>
		<ul>
			<li><img src=<?php echo base_url().'smart_build/assets/images/dashboard-icon.png';?>><a href=<?php echo base_url().'smart_build/index.php/tdashboard';?> target="_self">Dashboard</a></li>
			<li><img src=<?php echo base_url().'smart_build/assets/images/course-icon.png';?>><a href=<?php echo base_url().'smart_build/index.php/tcourse';?> target="_self">Course</a></li>
			<li><img src=<?php echo base_url().'smart_build/assets/images/discussion-icon.png';?>><a href=<?php echo base_url().'smart_build/index.php/tdiscussion';?> target="_self">Discussion</a></li>
			<li><img src=<?php echo base_url().'smart_build/assets/images/analytics-icon.png';?>><a href=<?php echo base_url().'smart_build/index.php/tanalytics';?> target="_self">Analytics</a></li>
			<li><img src=<?php echo base_url().'smart_build/assets/images/setting-icon.png';?>><a href=<?php echo base_url().'smart_build/index.php/tsetting';?> target="_self">Setting</a></li>
		</ul>
	</nav>

	<div id="stat-bar">
		<input id="searchbox" placeholder="Search for courses, help etc...">
		<button id="sb" type="submit">Search</button>

		<?php if(!$this->session->userdata('logged_in')) : ?>
			<a href="#">Hi, Smart Build!<img src=<?php echo base_url().'smart_build/assets/images/profile.png';?> width="40px" height="40px"></a>
		<?php endif;?>

		<?php if($this->session->userdata('logged_in')) : ?>
			<a href="#">Hi, <?php echo $_SESSION["studentname"];?><img src=<?php echo base_url().'smart_build/assets/images/profile.png';?> width="40px" height="40px"></a>
		<?php endif;?>
	</div>



	<!--      Content       -->
	<div id="content">
		<div class="quesBoard infoBox" style="width:55%;">
			<h3 style="text-align:center; margin-bottom: 30px;">Question board</h3>
			<?php
			if(isset($question_comment_map)){
				foreach($question_comment_map as $key => $item) {
					$arr=explode('|',$key,3);
					echo "<div class=\"MenuPanel\">";
					echo "<div class=\"MenuTitle\">";
					echo "<p class=\"qid\" style=\"display: none\">".$arr[2]."</p>";
					echo "<figure>";
					echo "<img class=\"person\" src=\"../assets/images/girl.png\" width=\"80px\"height=\"80px\">";
					echo "<p><a href=\"#\" target=\"_self\"> ".$arr[0]."</a>";
					echo "<br> ".$arr[1]."</p>";
					echo "<img class=\"side-image\" src=\"../assets/images/comment.png\" width=\"20px\" height=\"20px\">";
					echo "</figure>";
					echo "</div>";
					echo "<div class=\"MenuContent\">";
					echo "<div class=\"resBox\">";
					for($i=0;$i<sizeof($item);$i++){
						echo "<div class=\"response\">";
						echo "<img src=\"../assets/images/boy.png\"/>";
						echo "<p>".$item[$i]."</p>";
						echo "</div>";
					}
					echo "</div>";
					echo "<div class=\"formBox\"></div>";
					echo "</div>";
					echo "</div>";
				}
			}
			?>


		</div>

		<div id="content-4" class="infoBox" style="padding:15px; float:left;">

			<h3>Categories</h3>
			<hr>
			<table id="Categories-table">
				<tr>
					<th></th>
					<th></th>
				</tr>
				<tr>
					<td>Assignment</td>
					<td><span>2</span></td>
				</tr>

				<tr>
					<td>Other:</td>
					<td><span>1</span></td>
				</tr>
				<tr>
					<td>Mid-term Exam</td>
					<td><span>0</span></td>
				</tr>
				<tr>
					<td>Final Exam</td>
					<td><span>0</span></td>
				</tr>
			</table>
		</div>

		<div style="float:left; margin-left: 75px; margin-top: 100px;;"> <img src="../assets/images/learning.png" width="200px"/><div>
				<!--
				<div class="postQ infoBox">
					<h4 style="text-align:center;">Post New Question</h4>
					<form>
						<input id="pTitle" type="text" placeholder="Title" required="required" />
						<textarea id="pContent" rows="8" placeholder="Type your question here..." wrap="hard" required="required"></textarea>
						<input id="newSub" type="button" value="Submit"/>
					</form>

				</div>
				-->
			</div>
			<!--    End Content     -->


</box>


<!-- Optional JavaScript -->
<!-- jQuery first, then Bootstrap JS -->
<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script>
	$(document).ready(function(){

		// postNewClicked();

		slideUpDown();


	});

	function postNewClicked(){
		$("#newSub").click(function(){
			if($("#pTitle").val() == "" || $("#pContent").val() == ""){
				alert("Please input the title & content.");
			} else {
				$(".quesBoard").html(
					$(".quesBoard").html()
					+
					`
					<div class="MenuPanel">
						<div class="MenuTitle">

								<figure>
									<img class="person" src="./images/profile.png" width="80px"height="80px">
									<p><a href="#" target="_self">` + $("#pTitle").val() + `</a>
									<br>` + $("#pContent").val() + `
									</p>

									<img class="side-image" src="./images/comment.png" width="20px" height="20px">

								</figure>

						</div>
						<div class="MenuContent">
								<div class="resBox">

								</div>

								<div class="formBox"></div>

						</div>
					</div>
				`

				);
				slideUpDown();
			}
		});
	}

	function slideUpDown(){
		$(".MenuPanel").each(function(){
			$(this).children(".MenuContent").hide();
		});

		$(".MenuTitle").each(function(){
			$(this).click(function(){

				if($(this).parents(".MenuPanel").children(".MenuContent").css("display") != "none"){
					$(this).parents(".MenuPanel").children(".MenuContent").slideUp();
				}else{

					// 创建form的submit表格，如果存在就跳过
					if($(this).parents(".MenuPanel").children(".MenuContent").children(".formBox").html() == ''){
						$(this).parents(".MenuPanel").children(".MenuContent").children(".formBox").html(
							`
						<form class="resSubmit" method="get" target="iframe">
							<textarea rows="3" placeholder="type your response here..." wrap="hard" required="required"></textarea>
							<input type="submit" value="Submit"/>
						</form>
						<iframe id="iframe" name="iframe" style="display:none;"></iframe>
						`
						);
						$(".resSubmit").submit(function(e){
							var $textArea = $(this).children('textarea'),
								textArea = $textArea.val();
							console.log($(this));
							$(this).parents(".MenuPanel").children(".MenuContent").children(".resBox").html(
								$(this).parents(".MenuPanel").children(".MenuContent").children(".resBox").html()
								+
								`
							<div class="response">
								<img src="./images/profile.png" />
								<p>`+textArea+`</p>
							</div>
							`
							);

							alert("Submitted!");
						});
					}
					$(this).parents(".MenuPanel").children(".MenuContent").slideDown();

				}
			});

		});

	}

</script>
</body>
</html>
