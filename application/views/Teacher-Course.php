<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=<?php echo base_url().'smart_build/assets/css/style.css';?>>
    <link rel="stylesheet" href=<?php echo base_url().'smart_build/assets/css/bootstrap.min.css';?>>
    <link rel="stylesheet" href=<?php echo base_url().'smart_build/assets/css/course.css';?>>

    <title>Dashboard</title>
</head>
<body>
<box>
    <nav>
		<a href=<?php echo base_url().'smart_build/index.php/tlogin';?> target="_self"><img id="logo" src="../assets/images/SmartED.png" width="200px" height="46px"></a>
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
        <!--<img src="./images/temp-dash.png">-->
		<div class="stuffBox">
			<h3 >Teaching stuff</h3>
			<div class="colLeft infoBox">
				<div class="data">
					<img src="../assets/images/icon-recording.png">
					<p><b>Recordings</b>
						<br><span style="color:#88888a;">- this folder contains video recording of each week.</span></p>
				</div>
				<div class="data">
					<img src="../assets/images/icon-material.png">
					<p><b>Learning Material</b>
						<br><span style="color:#88888a;">- this folder contains material for each course.</span></p>
				</div>
				<div class="data">
					<img src="../assets/images/icon-soft.png">
					<p><b>Tools</b>
						<br><span style="color:#88888a;">- this folder contains tools which required to download for each course.</span></p>
				</div>
			</div>

			<div class="colRight infoBox">
				<div class="data">
					<img src="../assets/images/icon-assessment.png">
					<p><b>Assessment to be reviewed</b>
						<br><span style="color:#88888a;">- this folder contains items that needs to be reviewed or uploaded.</span></p>
				</div>
				<div class="data">
					<img src="../assets/images/icon-announce.png">
					<p><b>Announcement to be made</b>
						<br><span style="color:#88888a;">- this folder contains items to be announced.</span></p>
				</div>
				<div class="data">
					<img src="../assets/images/icon-enroll.png">
					<p><b>Students Enrolled</b>
						<br><span style="color:#88888a;">this folder contains the details of student enrolled in each course.</span></p>
				</div>
			</div>
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
