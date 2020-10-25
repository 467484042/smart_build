<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=<?php echo base_url().'smart_build/assets/css/style.css';?>>
    <link rel="stylesheet" href=<?php echo base_url().'smart_build/assets/css/bootstrap.min.css';?>>

    <title>Course3801-SmartED Analytics</title>
</head>
<body>
<box>
    <nav id="coursebar">
        <a href=<?php echo base_url().'smart_build/index.php/course';?>><img id="exit" src=<?php echo base_url().'smart_build/assets/images/exit.png';?>></a>
        <h1 id="course-h1">DECO3801</h1>
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
    <div id="course-title"><p>SmartED Analytics</p></div>
    
    <div class="flex-container">
        <div class="flex-item1">Average Grade<br><span style="color:blue"><?php echo $avrgGrade?></span><br><span style="color:greenyellow"> +1.2%</span></div>
        <div class="flex-item2">Current Course/tutor statisfaction<br><span style="color:blue">89%/95%</span><br><span style="color:greenyellow"> +0.5%</span></div>
        <div class="flex-item3">Visit Times<br><span style="color:blue"><?php echo $vt?></span><br><span style="color:greenyellow"> +1 place</span></div>  
    </div>

    <div class="flex-video">
        <div><h4><b>For you:</b></h4></div>
        <?php if($this->session->userdata('grade')<6) : ?>
          <div class="first video">You seemd to perform lower in<span style="color:purple"> Basic Design Concepts</span>, you can watch this sectionof the<span style="color:purple"> Lecture 4 </span>to gain a better understanding:
            <video src="https://www.youtube.com/results?search_query=basic+architectural+design+concepts" controls
            width="300" height="150"></video>
            <div class ="video-words"><span style="color:purple">Watch 43:10-49:30 of Lecture 4</span></div>
            <p>The<span style="color:purple"> Lecture </span> has posted a new document: <span style="color:purple"> How to Write Your Interim Critique 80% of students </span>have <span style="color:purple">found this helpful</span> so far!</p>
            <video src="https://learn.uq.edu.au/bbcswebdav/pid-5666891-dt-content-rid-29344426_1/courses/DECO3801S_7060_63091/Studio3-2.mp4" controls 
            width="300" height="150"></video>
            <div class="video-words"><span style="color:purple">Open How to Write Your Interim Critique</span></div>
            
          </div>
        <?php endif;?>

        <?php if($this->session->userdata('grade')>=6) : ?>
          <div class="first video">Your score has exceeded the average score, we recommend some <span style="color:purple"> Advanced Design Concepts</span> for you to get better results, you can watch this section of the<span style="color:purple"> video </span>to gain a better understanding:
          <br>
            <iframe width="300" height="150" src="https://www.youtube.com/embed/tgbNymZ7vqY">
            </iframe>
            <!-- <div class ="video-words"><span style="color:purple">Watch 43:10-49:30 of Lecture 4</span></div> -->
            <p>The<span style="color:purple"> Lecture </span> has posted a new document: <span style="color:purple"> How to Write Your Interim Critique 80% of students </span>have <span style="color:purple">found this helpful</span> so far!</p>
             <!-- controls 
            width="300" height="150"></video> -->
            <div class="video-words"><span style="color:purple">Open How to Write Your Interim Critique</span></div>
            
          </div>
        <?php endif;?>

    </div>

    <div class="column-container" >
        <div class="column-item-1"><h6><b>Key Insight Report</b></h6><br><span style="color:purple"> You and 71 others </span>have attended<span style="color:purple"> all the tutorials </span><br>You need<span style="color:purple"> 80% on the Interim Critique </span>to get grade of 7
        <div class="see-full"><p><a href="#"><span style="color:purple">See full report</span></a></p></div>
        </div>
        
        <div class="column-item-2"><h6><b>Actionable Insights</b></h6><p>The <span style="color:purple">week 7 personalised lecture</span>is ready to be viewed</p> <p><a href="#"><span style="color:purple">Watch personalised lecture</span></a></p>
        <div><p>Your next assessment is <span style="color:purple">Interim Critique</span> due at <span style="color:purple">10am Friday 22/5/20</span></p> <p><a href="#"><span style="color:purple">Submit assessment</span></p></div>
            <div><p>There is <span style="color:purple">1 new message</span> from the <span style="color:purple">lecture</span></p> <p><a href="#"><span style="color:purple">Open message</span></p></div>
            <div class="see-full"><a href="#"><span style="color:purple">See full report</span></a></div>
        
    
    </div>
        <div class="column-item-3"><h6><b>Suggestions</b></h6><br>If you have some advice, please write in<a href="#"><span style="color:blue"> here</span></a></div>  
    </div>

</div>
<!--    End Content     -->


</box>

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

/*      End Searching       */
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


.flex-container {
  display: -webkit-flex;
  display: flex;
  width: 50%;
  height: 100px;
  background-color: #fdf9f9;
  margin-left: 19.5%;
  float:left;
}

.flex-item1 {
  width: 300px;
  height: 80px;
  margin: 10px;
  border: 1px solid rgb(78, 78, 248);
  text-align: center;
  font-size:0.85em;
  margin-left: 0;
  
}
.flex-item2 {
  width: 300px;
  height: 80px;
  margin: 10px;
  border: 1px solid rgb(78, 78, 248);
  text-align: center;
  font-size:0.85em;

}
.flex-item3 {
  width: 300px;
  height: 80px;
  margin: 10px;
  border: 1px solid rgb(78, 78, 248);
  text-align: center;
  font-size:0.85em;
  margin-right: 0;
}

.flex-video {
 
  width: 50%;
  height: 540px;
  background-color: #fdf9f9;
  margin-left: 19.5%;
  border: 1px solid rgb(78, 78, 248);
  float:left;
  clear: both;
  
}

h4{
  font-family: 'Open Sans', sans-serif;
  font-size:3em;
  font-weight: bolder;
  color: #000;
  line-height:1.4em;
}

.first video{
  display: flex;
  margin-top: 2%;
  
  

}

.video-words{
  float: right;
}

.column-container {
  display: flex;
  -webkit-flex-direction: column;
  flex-direction: column;
  width: 30%;
  height: 640px;
  background-color: #fdf9f9;
  margin-left: 70%;
  line-height: 1em;
 
}
.column-item-1 {
  width: 97%;
  height: 175px;
  margin: 10px;
  border: 1px solid rgb(78, 78, 248);
  text-align: left;
}
.column-item-2 {
  width: 97%;
  height: 260px;
  margin: 10px;
  border: 1px solid rgb(78, 78, 248);
  text-align: left;
}

.column-item-3 {
  width: 97%;
  height: 175px;
  margin: 10px;
  margin-bottom: 0;
  border: 1px solid rgb(78, 78, 248);
  text-align: left;
}

.see-full{
  float:right;
  right:0;;
}
/*    End of Analytics css      */

.card1 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  border-radius: 5px;
float: left;}




.container-card1 {
  padding: 2px 16px;
  text-align: left;
}
.card2 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  border-radius: 5px;
float: right;}


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