<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=<?php echo base_url().'smart_build/assets/css/style.css';?>>
    <link rel="stylesheet" href=<?php echo base_url().'smart_build/assets/css/bootstrap.min.css';?>>

    <title>Course</title>
</head>
<body>
<box>
    <nav>
        <a href="./index.html" target="_self"><img id="logo" src="../assets/images/SmartED.png" width="200px" height="46px"></a>
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
        <!--<table>-->
            <!--<tr><td><h2>Semester 2, 2020</h2></td></tr>-->
            <!--<tr><td><a href="./Course3801-anouncement.html">DECO3801 Design Computing Studio 3 - Build (external)</a></td></tr>-->
            <!--<tr><td><a href="#">COMP3301 Operating Systems Architecture (external)</a></td></tr>-->
            <!--<tr><td><a href="#">COMP3506 Algorithms &amp; Data Structures (external)</a></td></tr>-->
            <!--<tr><td><a href="#">DECO2800 Design Computing Studio 2 - Testing &amp; Evaluation (external)</a></td></tr>-->
        <!--</table>-->
        <a href="./Course3801-Learning Resource.html" target="_self"><img id="logo" src="../assets/images/temp-course-1.png" height="400px"></a>
        <a href="./Course3801-My Grades.html" target="_self"><img id="logo" src="../assets/images/temp-course-2.png" height="200px"></a>
        <a href="./Course3801-Assessment.html" target="_self"><img id="logo" src="../assets/images/temp-course-3.png" height="150px"></a>
    </div>
<!--    End Content     -->

</box>>


<!-- Optional JavaScript -->
<!-- jQuery first, then Bootstrap JS -->
<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../assets/js/main.js"></script>
</body>
</html>

<?php if(!$this->session->userdata('logged_in')) : ?>
            <a href="./student_pro.html">Hi, Smart Build!<img src="../assets/images/profile.png" width="40px" height="40px"></a>
<?php endif;?>
        
<?php if($this->session->userdata('logged_in')) : ?>
            <a href="./student_pro.html">Hi, <?php echo $_SESSION["studentname"];?><img src="../assets/images/profile.png" width="40px" height="40px"></a>
<?php endif;?>
