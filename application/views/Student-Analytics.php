<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href=<?php echo base_url().'smart_build/assets/css/style.css';?>>
	<link rel="stylesheet" href=<?php echo base_url().'smart_build/assets/css/bootstrap.min.css';?>>
	<link rel="stylesheet" href=<?php echo base_url().'smart_build/assets/css/analytics.css';?>>

	<title>Course3801-SmartED Analytics</title>
</head>
<body>
<box>
	<nav>
		<a href=<?php echo base_url().'smart_build/index.php/login';?> target="_self"><img id="logo" src="../assets/images/SmartED.png" width="200px" height="46px"></a>
		<select>
			<option value ="DECO3801">DECO3801</option>
			<option value ="COMP3301">COMP3301</option>
			<option value="COMP3506">COMP3506</option>
			<option value="DECO2800">DECO2800</option>
		</select>
		<ul>
			<li><img src=<?php echo base_url().'smart_build/assets/images/dashboard-icon.png';?>><a href=<?php echo base_url().'smart_build/index.php/dashboard';?> target="_self">Dashboard</a></li>
			<li><img src=<?php echo base_url().'smart_build/assets/images/course-icon.png';?>><a href=<?php echo base_url().'smart_build/index.php/course';?> target="_self">Course</a></li>
			<li><img src=<?php echo base_url().'smart_build/assets/images/discussion-icon.png';?>><a href=<?php echo base_url().'smart_build/index.php/discussion';?> target="_self">Discussion</a></li>
			<li><img src=<?php echo base_url().'smart_build/assets/images/analytics-icon.png';?>><a href=<?php echo base_url().'smart_build/index.php/analytics';?> target="_self">Analytics</a></li>
			<li><img src=<?php echo base_url().'smart_build/assets/images/setting-icon.png';?>><a href=<?php echo base_url().'smart_build/index.php/quiz';?> target="_self">Quiz</a></li>
			<li><img src=<?php echo base_url().'smart_build/assets/images/setting-icon.png';?>><a href=<?php echo base_url().'smart_build/index.php/setting';?> target="_self">Setting</a></li>
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

		<div class="flex-container">
			<div class="flex-item1">Average Grade<br><span style="color:blue"><?php echo $avrgGrade?></span><br><span style="color:greenyellow"> +1.2%</span></div>
			<div class="flex-item2">Current Course/tutor statisfaction<br><span style="color:blue">89%/95%</span><br><span style="color:greenyellow"> +0.5%</span></div>
			<div class="flex-item3">Visit Times<br><span style="color:blue"><?php echo $vt?></span><br><span style="color:greenyellow"> +1 place</span></div>
		</div>

		<div class="flex-video infoBox">
			<div><h4><b>For you:</b></h4></div>
			<?php if($this->session->userdata('grade')<6) : ?>
				<?php
				if(sizeof($errorMap)>=1){
					foreach($errorMap as $key => $item) {
						echo "<div class=\"first video\">";
						echo "You made a mistake in this week practical quiz --";
						echo "<span style=\"color:purple\">Question ".$key."</span>";
						echo " you can watch this section of the to gain a better understanding:";
						echo "<br>";
						echo "<iframe width=\"300\" height=\"150\" allow=\"fullscreen\" src=\"".$item."\">";
						echo "</iframe>";
						echo "</div>";

					}

				}

				?>
			<?php endif;?>

			<?php if($this->session->userdata('grade')>=6) : ?>
				<?php
				if(sizeof($errorMap)>=1){
					foreach($errorMap as $key => $item) {
						echo "<div class=\"first video\">";
						echo "You made a mistake in this week practical quiz --";
						echo "<span style=\"color:purple\">Question ".($key+1)."</span>";
						echo " you can watch this section of the to gain a better understanding:";
						echo "<br>";
						echo "<iframe width=\"300\" height=\"150\" allow=\"fullscreen\" src=\"".$item."\">";
						echo "</iframe>";
						echo "</div>";
					}

				}

				?>

			<?php endif;?>
			<?php if(sizeof($errorMap)==0) : ?>
			<div class="first video">
				<span style="color:purple"> Congratulations</span>
				<br>
				You got full marks on  this week quiz
				<br>
				Below is a video for relaxing
				<br>
				<iframe width="300" height="150" src="https://www.youtube.com/embed/tgbNymZ7vqY">
				</iframe>

			</div>
			<?php endif;?>

		</div>

		<div class="column-container" >
			<div class="column-item-1 infoBox">
				<h6><b>Key Insight Report</b></h6><br>
				<span style="color:purple"> You and <?php echo $participant;?> others </span>
				have attended
				<span style="color:purple"> this week quiz </span>
				<br>
				Based on the quiz result you
				<span style="color:purple"> will have about <?php echo $quiz_result;?> chance</span>
				to getting 7 in this section in final exam.
<!--				<br><div class="see-full"><p><a href="#"><span style="color:purple">See full report</span></a></p></div>-->
			</div>

			<div class="column-item-2 infoBox">
				<h6><b>Actionable Insights</b></h6>
<!--				<p>The <span style="color:purple">week 7 personalised lecture</span> is ready to be viewed</p>-->
				<p><a href="#"><span style="color:purple">Watch personalised lecture</span></a></p>
				<div><p>Your next assessment is
						<span style="color:purple">Interim Critique</span>
						due at <span style="color:purple">10am Friday 22/5/20</span></p>
					<p><a href="<?php echo base_url().'smart_build/index.php/quiz';?>"><span style="color:purple">Do a quiz</span></a></p>
				</div>
				<div>
					<p style="color:purple">There is <span style="color:purple"><?php echo $unread;?> new message(s)</span> from the <span style="color:purple">discussion board</span></p> <p>
						<a href="<?php echo base_url().'smart_build/index.php/discussion'?>"><span style="color:purple">Open message</span></a></p>
				</div>
<!--				<div class="see-full"><a href="#"><span style="color:purple">See full report</span></a></div>-->

			</div>

			<div class="column-item-3 infoBox"><h6><b>Suggestions</b></h6><br>If you have some advice, please write in<a href="#"><span style="color:blue"> here</span></a></div>
		</div>

	</div>
	<!--    End Content     -->


</box>


<!-- Optional JavaScript -->
<!-- jQuery first, then Bootstrap JS -->
<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../assets/js/main.js"></script>
</body>
</html>
