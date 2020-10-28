<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=<?php echo base_url().'smart_build/assets/css/style.css';?>>
    <link rel="stylesheet" href=<?php echo base_url().'smart_build/assets/css/bootstrap.min.css';?>>
    <link rel="stylesheet" href=<?php echo base_url().'smart_build/assets/css/t-analytics.css';?>>

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
		<div class="left infoBox">
			<b><h3>Assessment State</h3><b>
					<br>
					<select>
						<option value ="Quiz-1">Quiz 1</option>
						<option value ="Assignment-1">Assignment 1</option>
						<option value="Quiz-2">Quiz 2</option>
						<option value="Final-exam">Final exam</option>
					</select>
					<table>

						<tr>
							<th width="150px">Student</th>
							<th width="100px">State</th>
							<th width="150px">Time used</th>
							<th width="80px">Grades</th>
						</tr>
						<?php
							if(sizeof($quiz_array)>=1){
//								echo (quiz_array[0][]);
								for($i=0; $i<sizeof($quiz_array);$i++){
									$name=$quiz_array[$i]["name"];
									$state=$quiz_array[$i]["state"];
									$time=$quiz_array[$i]["time"];
									$grade=$quiz_array[$i]["qgrade"];
									echo "<tr>";
									echo "<td>".$name."</td>";
									echo "<td>".$state."</td>";
									echo "<td>".$time." mins"."</td>";
									echo "<td>".$grade."/5"."</td>";
									echo "</tr>";
								}
							}
						?>
						<tr>
							<td>Ashby Cooper</td>
							<td>Good</td>
							<td>38 mins</td>
							<td>3 / 5</td>
						</tr>

<!--						<tr>-->
<!--							<td>Edward Ruhar</td>-->
<!--							<td>Almost fail</td>-->
<!--							<td>10 mins</td>-->
<!--							<td><span class="danger">5 / 5</span></td>-->
<!--						</tr>-->
					</table>
		</div>


		<div class="right infoBox">
			<h5><b>Key Insight Report</b></h5>
			<br><li><span style="color:purple"> All the students </span>have attended<span style="color:purple"> all the tutorials </span></li>
			<br><li>There are<span style="color:purple"> 5 students </span>whoes waiting to be marked.</li>
			<br><div class="see-full" style="float:right;"><p><a href="#"><span style="color:purple">See full report</span></a></p></div>
		</div>

		<div class="right infoBox">
			<h5><b>Actionable Insights</b></h5>
			<li>The <span style="color:purple">week 7 report</span> is ready to be viewed</li>
			<li><a href="#"><span style="color:purple">See the state of students</span></a></li>
			<li>The next assessment is <span style="color:purple">Interim Critique</span> due at <span style="color:purple">10am Friday 22/5/20</span></li>
			<li><a href="#"><span style="color:purple">See all Submits</span></a></li>
			<br><p><a href="Teacher-Discussion.html"><span style="color:purple">There is 1 new message from a Student</span></a></p>
			<div class="see-full" style="float:right;"><a href="#"><span style="color:purple">See full report</span></a></div>

		</div>

		<div class="right infoBox"><h5><b>Suggestions</b></h5>
			<br>Looks some students are gonna fail this course due to the low performance. Keep in touch with them click<a href="./Teacher-Discussion.html"><span style="color:blue"> here</span></a>
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
