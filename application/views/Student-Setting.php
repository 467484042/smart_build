<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <title>Setting</title>
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
            <li><img src="../assets/images/dashboard-icon.png"><a href=<?php echo base_url().'smart_build/index.php/dashboard';?> target="_self">Dashboard</a></li>
            <li><img src="../assets/images/course-icon.png"><a href=<?php echo base_url().'smart_build/index.php/course';?> target="_self">Course</a></li>
            <li><img src="../assets/images/discussion-icon.png"><a href=<?php echo base_url().'smart_build/index.php/discussion';?> target="_self">Discussion</a></li>
            <li><img src="../assets/images/analytics-icon.png"><a href=<?php echo base_url().'smart_build/index.php/deco3801';?> target="_self">Analytics</a></li>
            <li><img src="../assets/images/setting-icon.png"><a href=<?php echo base_url().'smart_build/index.php/setting';?> target="_self">Setting</a></li>
        </ul>
    </nav>

    <div id="stat-bar">
        <input id="searchbox" placeholder="Search for courses, help etc...">
        <button id="sb" type="submit">Search</button>

        <?php if(!$this->session->userdata('logged_in')) : ?>
            <a href="./student_pro.html">Hi, Smart Build!<img src=<?php echo base_url().'smart_build/assets/images/profile.png';?> width="40px" height="40px"></a>
        <?php endif;?>
        
        <?php if($this->session->userdata('logged_in')) : ?>
            <a href="./student_pro.html">Hi, <?php echo $_SESSION["studentname"];?><img src=<?php echo base_url().'smart_build/assets/images/profile.png';?> width="40px" height="40px"></a>
	    <?php endif;?>
    </div>

<!--      Content       -->
    <div id="content">
        <img src="../assets/images/temp-setting.png" height="500px">

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