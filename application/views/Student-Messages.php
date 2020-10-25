<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <title>Messages</title>
</head>
<body>
<box>
    <nav>
        <h1>SmartEd</h1>
        <ul>
        <li><img src=<?php echo base_url().'assets/images/dashboard-icon.png';?>><a href=<?php echo base_url().'smart_build/index.php/dashboard';?> target="_self">Dashboard</a></li>
            <li><img src=<?php echo base_url().'assets/images/course-icon.png';?>><a href=<?php echo base_url().'smart_build/index.php/course';?> target="_self">Course</a></li>
            <li><img src=<?php echo base_url().'assets/images/discussion-icon.png';?>><a href=<?php echo base_url().'smart_build/index.php/discussion';?> target="_self">Discussion</a></li>
            <li><img src=<?php echo base_url().'assets/images/analytics-icon.png';?>><a href=<?php echo base_url().'smart_build/index.php/deco3801';?> target="_self">Analytics</a></li>
            <li><img src=<?php echo base_url().'assets/images/setting-icon.png';?>><a href=<?php echo base_url().'smart_build/index.php/setting';?> target="_self">Setting</a></li>
        </ul>
        <img src="../assets/images/learning.png" >
    </nav>

    <div id="stat-bar">
        <input id="searchbox" placeholder="Search for courses, help etc...">
        <button id="sb" type="submit">Search</button>

        <?php if(!$this->session->userdata('logged_in')) : ?>
            <a href=<?php echo base_url().'smart_build/index.php/login';?>>Hi, Smart Build!<img src=<?php echo base_url().'smart_build/assets/images/profile.png';?> width="40px" height="40px"></a>
        <?php endif;?>
        
        <?php if($this->session->userdata('logged_in')) : ?>
            <a href=<?php echo base_url().'smart_build/index.php/course';?>>Hi, <?php echo $_SESSION["studentname"];?><img src=<?php echo base_url().'smart_build/assets/images/profile.png';?> width="40px" height="40px"></a>
	    <?php endif;?>
        
    </div>

<!--      Content       -->
    <div id="content">
        <img src="../assets/images/temp-msg.png">

    </div>
<!--    End Content     -->

</box>>


<!-- Optional JavaScript -->
<!-- jQuery first, then Bootstrap JS -->
<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>