<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=<?php echo base_url().'smart_build/assets/css/style.css';?>>
    <link rel="stylesheet" href=<?php echo base_url().'smart_build/assets/css/bootstrap.min.css';?>>
    <link rel="stylesheet" href=<?php echo base_url().'smart_build/assets/css/dashboard.css';?>>

    <title>Dashboard</title>
</head>
<body>
<box>
    <nav>
        <a href=<?php echo base_url().'smart_build/index.php/home';?> target="_self"><img id="logo" src=<?php echo base_url().'smart_build/assets/images/SmartED.png';?> width="200px" height="46px"></a>
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

		<div id ="quiz" style="margin-left:50px; margin-top:30px;">
			<form action="<?php echo base_url().'smart_build/index.php/dashboard'?>" method="POST">
				<?php
				if(sizeof($question)>=1){
					for($i = 0; $i < sizeof($question); $i++){
						$n=$i+1;
						echo "<p>".$question[$i]->qname."</p>";
						echo "<p>".$question[$i]->qcontent."</p>";
						$correctAns=$question[$i]->ans;
						if($correctAns=="a"){
							echo "<label for=\"Q".$n."A\" style=\"background-color: lightgreen;\">"."A: ".$question[$i]->choiceA."</label><br>";
						}else{
							echo "<label for=\"Q".$n."A\" >"."A: ".$question[$i]->choiceA."</label><br>";
						}
						if($correctAns=="b"){
							echo "<label for=\"Q".$n."B\" style=\"background-color: lightgreen;\">"."B: ".$question[$i]->choiceB."</label><br>";
						}else{
							echo "<label for=\"Q".$n."B\">"."B: ".$question[$i]->choiceB."</label><br>";
						}
						if($correctAns=="c"){
							echo "<label for=\"Q".$n."C\" style=\"background-color: lightgreen;\">"."C: ".$question[$i]->choiceC."</label><br>";
						}else{
							echo "<label for=\"Q".$n."C\">"."C: ".$question[$i]->choiceC."</label><br>";
						}
						if($correctAns=="d"){
							echo "<label for=\"Q".$n."D\" style=\"background-color: lightgreen;\">"."D: ".$question[$i]->choiceD."</label><br>";
						}else{
							echo "<label for=\"Q".$n."D\">"."D: ".$question[$i]->choiceD."</label><br>";
						}

						echo "Correct Answer is :".$correctAns."<br>";
						echo "Your Answer is :".$user_ans[$i]."<br>";
						echo "<br>";
					}

				}

				?>

				<input type="submit" value="Back">
			</form>
		</div>
        <!--<img src="./images/temp-dash.png">-->

          

    </div>
<!--    End Content     -->

</box>

<!-- Optional JavaScript -->
<!-- jQuery first, then Bootstrap JS -->
<script src=<?php echo base_url().'smart_build/assets/js/jquery-3.5.1.min.js';?>></script>
<script src=<?php echo base_url().'smart_build/assets/js/bootstrap.bundle.min.js';?>></script>
<script type="text/javascript" src=<?php echo base_url().'smart_build/assets/js/main.js';?>></script>
</body>
</html>
