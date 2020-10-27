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

    <title>Course3801-Discussion Board</title>
</head>
<body>
<box>
    <nav>
        <a href=<?php echo base_url().'smart_build/index.php/home';?> target="_self"><img id="logo" src="../assets/images/SmartED.png" width="200px" height="46px"></a>
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
	<div class="quesBoard infoBox">
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

	<div class="postQ infoBox">
		<h4 style="text-align:center;">Post New Question</h4>
		<form action="<?php echo base_url().'smart_build/index.php/quiz/test4'?>" method="POST">
			<input id="pTitle" name="pTitle" type="text" placeholder="Title" required="required" />
			<textarea id="pContent" name="pContent" rows="8" placeholder="Type your question here..." wrap="hard" required="required"></textarea>
			<input id="newSub" type="submit" value="Submit"/>
		</form>

	</div>

</div>
<!--    End Content     -->


</box>


<!-- Optional JavaScript -->
<!-- jQuery first, then Bootstrap JS -->
<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../assets/js/discussion.js"></script>

</body>
</html>

