<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href=<?php echo base_url().'smart_build/assets/css/style.css';?>>
	<link rel="stylesheet" href=<?php echo base_url().'smart_build/assets/css/bootstrap.min.css';?>>
	<link rel="stylesheet" href=<?php echo base_url().'smart_build/assets/css/style-wc.css';?>>
<!--	<link rel="stylesheet" href="./css/bootstrap.min.css">-->
<!--	<link rel="stylesheet" href="css/style-wc.css">-->

	<title>UQ SmartEd</title>
</head>

<body>
<div class="content">

	<!--This is the content for start page-->

	<div class="form sign-in">
		<h2>UQ SmartEd Analysis</h2>
		<div class="intro">
			<div class="MenuPanel Wel">
				<div class="MenuTitle">Welcome</div>
				<div class="MenuContent">
					<p class="hide-content">

						<b>Hi!</b>
						<br>
						How is everything going today?
						<br>
						We have prepared something new for you! Just login and have a look!

					</p>
				</div>
			</div>
			<div class="MenuPanel">
				<div class="MenuTitle">What's SmartEd</div>
				<div class="MenuContent">
					<p class="hide-content">

						We are a data analysis company which focus on help student and teacher
						improve their learning or teaching process.
						<br><br>
						The system provides a concise information display platform that shows the progress of ongoing work or learning in many aspects.
						<br><br>
						Also, there is a discussion board online for user. They can post and receive new message on it.
						<br><br>
						The very distinctive function in this website is the analytics system.
						<br>
						Which using some algorithms to evaluate the state of studying/teaching progress.

					</p>

				</div>
			</div>
			<div class="MenuPanel">
				<div class="MenuTitle">What's the benefit it brings?</div>
				<div class="MenuContent">
					<p class="hide-content">

						The system strengthens the way students communicate with teachers.
						<br>Allow both parties to receive the latest news in a timely manner and reply to it at the same time
						<br><br>
						Through the analysis system, it will give the student's learning status.
						This can help them improve their learning efficiency.
						<br><br>
						For example, student will their average score and a feedback after they finish the online quiz.

					</p>

				</div>
			</div>
			<div class="MenuPanel">
				<div class="MenuTitle">About us</div>
				<div class="MenuContent">
					<p class="hide-content">

						Team: Smart Build

					</p>

				</div>
			</div>
		</div>
	</div>

	<!--This is login bar-->

	<div class="sub-cont">
		<div class="img">
			<div class="img__text m--up">
				<h2>Sign in here</h2>
				<p>press the button below</p>
			</div>
			<div class="img__text m--in">
				<h2>Home</h2>
				<p>press the button below to go back</p>
			</div>
			<div class="img__btn">
				<span class="m--up"><</span>
				<span class="m--in">></span>
			</div>
		</div>
		<div class="form sign-up">
			<h2>Teacher login page!</h2>
			<form class="modal-content" method="post" action="<?php echo base_url().'smart_build/index.php/Tlogin'?>">
				<label>
<!--					<span>Username</span>-->
<!--					<input type="text" />-->
					<label for="email"><b>Email</b></label>
					<input type="text" name="email" value="<?php if(isset($_COOKIE["email"])){echo $_COOKIE["email"];}?>" required>
				</label>
				<label>
					<label for="psw"><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="psw"
						   value="<?php
						   if(isset($_COOKIE["psw"])){
							   echo $_COOKIE["psw"];
						   }

						   ?>"
						   required>
<!--					<span>Password</span>-->
<!--					<input type="password" />-->
				</label>
				<label>
					<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
				</label>
				<p class="forgot-pass"><a href="javascript:">forget password?</a></p>
				<button type="submit" class="submit">Login</button>
			</form>
		</div>
	</div>
</div>
<script>

</script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Bootstrap JS -->
<script src=<?php echo base_url().'smart_build/assets/js/jquery-3.5.1.min.js';?>></script>
<script src=<?php echo base_url().'smart_build/assets/js/bootstrap.bundle.min.js';?>></script>
<script type="text/javascript" src=<?php echo base_url().'smart_build/assets/js/main.js';?>></script>

<script type="text/javascript">
	document.querySelector('.img__btn').addEventListener('click', function() {
		document.querySelector('.content').classList.toggle('s--signup')
	})

	$(document).ready(function(){
		$(".MenuPanel").each(function(){
			$(this).children(".MenuContent").hide();
		});

		$(".Wel").children(".MenuContent").show();

		$(".MenuTitle").each(function(){
			$(this).click(function(){

				if($(this).parents(".MenuPanel").children(".MenuContent").css("display") != "none"){
					$(this).parents(".MenuPanel").children(".MenuContent").slideUp();
				}else{
					$(this).parents(".MenuPanel").children(".MenuContent").slideDown();
				}
			});

		});

	});
</script>
</body>

</html>
