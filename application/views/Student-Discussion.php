<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
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
    <div id="course-title"><p>Discussion Board</p></div>
    <div id="content-3">
    <figure>
        <img src="../assets/images/boy.png" width="80px"height="80px">
        <p><a href="#" target="_self"> Assignment Answers</a>
        <br>Hi, for assignment if the support rate is 2/5 then should we write the answer as 0.4 or 40.0?</p>
        <div class="side-image">
            <img src="../assets/images/comment.png" width:="15px" height="15px">
            <img src="../assets/images/eye.png"width:="15px" height="15px">
            <img src="../assets/images/time.png" width:="15px" height="15px">
        </div>
    </figure>
    <figure>
        <img src="../assets/images/girl.png" width="80px"height="80px"> 
        <p><a href="#" target="_self"> Can't find zoom id for today's lecture...</a>
        <br> Where can I find it?</p>
        <div class="side-image">
            <img src="../assets/images/comment.png" width:="15px" height="15px">
            <img src="../assets/images/eye.png"width:="15px" height="15px">
            <img src="../assets/images/time.png" width:="15px" height="15px">
         </div>
    </figure>
    <figure>
        <img src="../assets/images/boy2.png" width="80px"height="80px">
        <p><a href="#" target="_self"> Assignment Questions</a>
        <br>Hi, Once we open the assignment and finish Unkow some of the questions, if we save it and </p>
        <div class="side-image">
            <img src="../assets/images/comment.png" width:="15px" height="15px">
            <img src="../assets/images/eye.png"width:="15px" height="15px">
            <img src="../assets/images/time.png" width:="15px" height="15px">
         </div>
    </figure>
    

    </div>
    <div id="content-4">
    <h3>Categories</h3>
        <hr>
        <table id="Categories-table">
        <tr>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td>Assignment 1</td>
            <td><span>8</span></td>
        </tr>
        <tr>
            <td>Assignment 2:</td>
            <td><span>21</span></td>
        </tr>
        <tr>
            <td>Assignment 3:</td>
            <td><span>13</span></td>
        </tr>
        <tr>
            <td>Other:</td>
            <td><span>2</span></td>
        </tr>
        <tr>
            <td>Mid-term Exam</td>
            <td><span>16</span></td>
        </tr>
        <tr>
            <td>Final Exam</td>
            <td><span>32</span></td>
        </tr>
        </table>
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

