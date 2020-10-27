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
        <a href=<?php echo base_url().'smart_build/index.php/home';?> target="_self"><img id="logo" src="../assets/images/SmartED.png" width="200px" height="46px"></a>
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
        <div class="tip infoBox">
            <h2>Welcome Back!</h2>
            <p>
                You have <a href="./Course3801-Assessment.html"><b>4 assignment</b></a> released, <b>1 course</b> today
                <br>You're on a <b>10 days</b> learning streak!
                <br>Keep it up and improve your result.
            </p>
            <img src="../assets/images/learning-1.png" height="145px">
        </div>

        <div class="dash left">
            <h3>Assessment</h3>

                    <a href="./Course3801-Assessment.html">
                        <div class="boxAssi subShadow infoBox">
                            <img src="../assets/images/dash-1.png" width="250px">
                        </div>
                    </a>

        </div>
        <div class="dash middle">
            <h3>Timetable</h3>

                    <a href="#">
                        <div class="boxSche subShadow infoBox">
                            <img src="../assets/images/dash-2-1.png" height="80px">
                        </div>
                    </a>
                    <a href="#">
                        <div class="boxSche1 boxSche subShadow infoBox">
                            <img src="../assets/images/dash-2-2.png" height="80px">
                        </div>
                    </a>

        </div>
        <div class="dash right">
            <h3>Announcement</h3>

                    <a href="./Course3801-anouncement.html">
                        <div class="boxAnnounce subShadow infoBox">
                            <img src="../assets/images/dash-3-1.png" height="65px">
                        </div>
                    </a>
                    <a href="./Course3801-anouncement.html">
                        <div class="boxAnnounce subShadow infoBox">
                            <img src="../assets/images/dash-3-2.png" height="50px">
                        </div>
                    </a>
                    <a href="./Course3801-anouncement.html">
                        <div class="boxAnnounce subShadow infoBox">
                            <img src="../assets/images/dash-3-3.png" height="50px">
                        </div>
                    </a>

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
