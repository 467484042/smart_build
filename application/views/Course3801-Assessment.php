<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=<?php echo base_url().'smart_build/assets/css/style.css';?>>
    <link rel="stylesheet" href=<?php echo base_url().'smart_build/assets/css/bootstrap.min.css';?>>

    <title>Course3801-Assessment</title>
</head>
<body>
<box>
    <nav id="coursebar">
        <a href=<?php echo base_url().'smart_build/index.php/course';?>><img id="exit" src=<?php echo base_url().'smart_build/assets//images/exit.png';?>></a>        <h1 id="course-h1">DECO3801</h1>
        <h2 id="course-h2">Design Computing</h2>
        <h3 id="course-h3">Studio3-Build</h3>
        <ul id="course-ul">
            <li><img src=<?php echo base_url().'smart_build/assets/images/announcement.png';?>><a href=<?php echo base_url().'smart_build/index.php/deco3801';?> target="_self">Anouncement</a></li>
            <li><img src=<?php echo base_url().'smart_build/assets/images/CouresePROFILE.png';?>><a href=<?php echo base_url().'smart_build/index.php/deco3801/courseProfile';?> target="_self">Course Profile</a></li>
            <li><img src=<?php echo base_url().'smart_build/assets/images/staff.png';?>><a href=<?php echo base_url().'smart_build/index.php/deco3801/courseStaff';?> target="_self">Course Staff</a></li>
            <li><img src=<?php echo base_url().'smart_build/assets/images/help.png';?>><a href=<?php echo base_url().'smart_build/index.php/deco3801/courseHelp';?> target="_self">Course Help</a></li>
            <li><img src=<?php echo base_url().'smart_build/assets/images/LearningResource.png';?>><a href=<?php echo base_url().'smart_build/index.php/deco3801/learningResource';?> target="_self">Learning Resource</a></li>
            <li><img src=<?php echo base_url().'smart_build/assets/images/Assessment.png';?>><a href=<?php echo base_url().'smart_build/index.php/deco3801/assessment';?> target="_self">Assessment</a></li>
            <li><img src=<?php echo base_url().'smart_build/assets/images/globalDiscussion.png';?>><a href=<?php echo base_url().'smart_build/index.php/deco3801/discussionBoard';?> target="_self">Discussion Board</a></li>
            <li><img src=<?php echo base_url().'smart_build/assets/images/Grade.png';?>><a href=<?php echo base_url().'smart_build/index.php/deco3801/myGrades';?> target="_self">My Grades</a></li>
            <li><img src=<?php echo base_url().'smart_build/assets/images/ANALYTICS.png';?>><a href=<?php echo base_url().'smart_build/index.php/deco3801/smartED';?> target="_self">SmartED Analytics</a></li>
        </ul>
        <img id="course-image" src=<?php echo base_url().'smart_build/assets/images/learning.png';?>>
    </nav>

    <div id="Course-stat-bar">
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
<div id="Coursecontent">
    <div id="course-title"><p>Assessment</p></div>
    <div id="content-2">

        <figure>
            <img src=<?php echo base_url().'smart_build/assets/images/folder2.png';?>>
            <p><a href="#" target="_self"> Assignment 1</a></p>
        </figure>
        <figure>
            <img src=<?php echo base_url().'smart_build/assets/images/folder2.png';?>>
            <p><a href="#" target="_self"> Assignment 2</a></p>
        </figure>
        <figure>
            <img src=<?php echo base_url().'smart_build/assets/images/folder2.png';?>>
            <p><a href="#" target="_self"> Assignment 3</a></p>
        </figure>
        <figure>
            <img src=<?php echo base_url().'smart_build/assets/images/folder2.png';?>>
            <p><a href="#" target="_self"> Final exam</a></p>
        </figure>

    </div>

</div>
<!--    End Content     -->


</box>>
<style>
#exit{
  margin-top: 0;
  padding: 0.1em;
  height:32px;
  margin-left: 0;
  
}

#course-h1{
  line-height: 1em;
}

#course-h2{
  font-family: 'Open Sans', sans-serif;
  font-size:1em;
  font-weight: 300;
  color: #000;
  line-height:1em;
  margin-left:2.6em;

}

#course-h3{
  font-family: 'Open Sans', sans-serif;
  font-size:1em;
  font-weight: 300;
  color: #000;
  line-height:1em;
  margin-left:2.6em;

}
#coursebar { 
  padding-top: 0;
  position: fixed;
  left: 0;
  top: 0;
  bottom: 0;
  display: block;
  height: auto;
  min-width: 40px;
  width: 260px;
    background-color: #f8fafb;
    border-right: 2px solid #88888a;

  transition-delay: 0s;
  transition-duration: 0.3s;
  transition-property: all;
  transition-timing-function: line;

}

#course-image{
  
  margin-top: 20px;
  margin-left:69px;

}

#course-ul{
  margin-top: 2.5em;
  font-size: 1.1em;
}

#searchbox{
    background-color: #f8fafb;
    border: 0;
    width:300px;
    outline: none;
}

#sb{
    float: left;
    width: 37px;
    height: 29px;
    background: #f8fafb url(../images/sb.png) left 0 no-repeat;
    border: 0;
    outline: none;
    text-indent: -1000px;
    cursor: pointer;
    overflow: hidden;
}

#Coursecontent{
    background-color: white;
}

#course-title{
    padding: 0.5em;
    padding-left: 0.7em;
    padding-bottom: 0;
    position: relative;
    margin-top: 60px;
    margin-left: 260px;
    border-bottom: 2px solid #88888a;
    font-family: 'Open Sans', sans-serif;
    font-size: 1.5em;
    font-weight: 500;
    background-color: #eeeeee;
}

#content-2{
    position: inherit;
    padding: 1em;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  font-size: 25px;
  margin-left: 320px;
  margin-right: 60px;
  margin-top: 40px;
  border-radius: 0.7em;
  background-color:white;
  
}

figure{
    padding-top: 20px;
    padding-bottom: 30px;
    border-bottom: 2px solid #d3d1d2;
}

#content-2 img{
    float: left;
    margin-left: 40px;
    margin-bottom: 60px;
}

#content-2 p{
    position: relative;
    margin-right: 40px;
    left: 30px;
}

#content-3{
position: absolute;
padding: 1em;
font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
font-size: 15px;
margin-left: 320px;
margin-right: 430px;
margin-top: 40px;
border-radius: 0.7em;
background-image: linear-gradient(to top, rgb(29, 118, 250),rgb(228, 224, 224));
float: left;
background-color: white;
width: 650px;

}

#content-3 img{
  float: left;
  margin-left: 30px;
  margin-bottom: 40px;
}

#content-3 p{
  position: relative;
  margin-right: 50px;
  left: 30px;
}


#content-4 {
  -webkit-flex-direction: column;
  flex-direction: column;
  width: 350px;
  height: 400px;
  background-color: #fdf9f9;
  margin-left: 60%;
  margin-right: 30px;
  margin-top: 40px;
  float:right;
 
}

.side-image{
  float: right;
  display: block;
  -webkit-flex-direction: column;
  flex-direction: column;
  margin-top: 1px;
  
}

#content-5{
  position: absolute;
  padding: 1em;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  font-size: 15px;
  margin-left: 300px;
  margin-right: 490px;
  margin-top: 10px;
  margin-bottom: 30px;
  border-radius: 0.7em;
  float: left;
  background-color: white;
  width: 600px;
  line-height: 0.7em;
  }
  
  #content-5 img{
    float: left;
    margin-left: 30px;
    margin-bottom: 40px;
  }
  
  #content-5 p{
    position: relative;
    margin-right: 50px;
    left: 30px;
  }
  #content-6 {
    -webkit-flex-direction: column;
    flex-direction: column;
    width: 400px;
    height: 600px;
    background-color: #fdf9f9;
    margin-left: 60%;
    margin-right: 30px;
    margin-top: 40px;
    float:right;
   
  }

  #grades-table{
    width: 400px;
    margin-top: 0;
  }

  #Categories-table{
    width: 350px;
    margin-top: 0;
  }


#Course-stat-bar{
  
    padding: 1em;
    position: fixed;
    top: 0;
    left: 260px;
    right: 0;
    height: 60px;
    background-color: #f8fafb;
    border-bottom: 2px solid #88888a;

}

#Course-stat-bar a{
  position: fixed;
  top: 20px;
  right:4.5em;
  font-family: 'Open Sans', sans-serif;
    line-height: 1.8em;
    color: #88888a;
    font-weight: 500;
}

#Course-stat-bar img{
  position: fixed;
  right:1em;
  top: 10px;
  margin-left: 10px;
}



</style>

<!-- Optional JavaScript -->
<!-- jQuery first, then Bootstrap JS -->
<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>