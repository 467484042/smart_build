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
            <li><img src="../assets/images/dashboard.png"><a href="http://localhost/smart_build/index.php/dashboard" >Dashboard</a></li>
            <li><img src="../assets/images/courses.png"><a href="http://localhost/smart_build/index.php/course" >Course</a></li>
            <li><img src="../assets/images/schedule.png"><a href="http://localhost/smart_build/index.php/schedule" >Schedule</a></li>
            <li><img src="../assets/images/messages.png"><a href="http://localhost/smart_build/index.php/message" >Masseges</a></li>
            <li><img src="../assets/images/setting.png"><a href="http://localhost/smart_build/index.php/setting" >Setting</a></li>
        </ul>
        <img src="../assets/images/learning.png" >
    </nav>

    <div id="stat-bar">
        <input id="searchbox" placeholder="Search for courses, help etc...">
        <button id="sb" type="submit">Search</button>

        <?php if(!$this->session->userdata('logged_in')) : ?>
            <a href="./student_pro.html">Hi, Smart Build!<img src="../assets/images/profile.png" width="40px" height="40px"></a>
        <?php endif;?>
        
        <?php if($this->session->userdata('logged_in')) : ?>
            <a href="./student_pro.html">Hi, <?php echo $_SESSION["studentname"];?><img src="../assets/images/profile.png" width="40px" height="40px"></a>
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