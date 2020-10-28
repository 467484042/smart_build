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
		<div class="tip tip2 infoBox">
			<h2>Welcome back Smart Build!</h2>
			<p>
				You have <b>5 new submission</b> to release and <b>2 meetings</b> to attend.
				<br>Last day for registration to workshop
				<br>Good work at teaching!
			</p>
			<img src="../assets/images/lecturer/learning-green.png" height="145px" width="284px">
		</div>

		<div class="dash left">
			<h3>Timetable</h3>

			<a>
				<div class="box1 subShadow infoBox">
					<img src="../assets/images/lecturer/dash-2-1.png" height="90px">
				</div>
			</a>
			<a>
				<div class="box1 box1-1 subShadow infoBox">
					<img src="../assets/images/lecturer/dash-2-2.png" height="90px">
				</div>
			</a>
			<a>
				<div class="box1 box1-2 subShadow infoBox">
					<!--<img src="./images/lecturer/dash-1.png" width="300px">-->
					<b>12:00 - 15:00 Break</b>
				</div>
			</a>

		</div>
		<div class="dash middle">
			<h3>Announcement</h3>

			<a href="#" onclick="popUpWindow('announce', 3800);">
				<div class="boxAnnounce subShadow infoBox">
					<img src="../assets/images/dash-3-1.png" height="65px">
				</div>
			</a>
			<a href="#" onclick="popUpWindow('announce', 1800);">
				<div class="boxAnnounce subShadow infoBox">
					<img src="../assets/images/dash-3-2.png" height="50px">
				</div>
			</a>
			<a href="#" onclick="popUpWindow('announce', 2800);">
				<div class="boxAnnounce subShadow infoBox">
					<img src="../assets/images/dash-3-3.png" height="50px">
				</div>
			</a>

		</div>
		<div class="dash right">
			<h3>Events</h3>

			<a href="#" onclick="popUpWindow('events', 1);">
				<div class="box2 subShadow infoBox">
					<img src="../assets/images/lecturer/dash-3-1.png" height="60px">
				</div>
			</a>
			<a href="#" onclick="popUpWindow('events', 2);">
				<div class="box2 subShadow infoBox">
					<img src="../assets/images/lecturer/dash-3-2.png" height="60px">
				</div>
			</a>

		</div>

    </div>
<!--    End Content     -->
	<div class="full-container infoBox">
		<span id="full-close">&times;</span>
		<div id="full-content"></div>
	</div>
</box>

<!-- Optional JavaScript -->
<!-- jQuery first, then Bootstrap JS -->
<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../assets/js/main.js"></script>
</body>
</html>
