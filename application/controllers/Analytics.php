<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Analytics extends CI_Controller {

	public function index()
	{
		$this->load->model('user_model');
		$grade=$this->user_model->averageGrade("DECO3801");
		$data["avrgGrade"]=$grade;
		$data["vt"]=$this->user_model->getVisitTime($_SESSION["id"]);
		$t3=$this->user_model->fetchUserAns($_SESSION["id"],1);
		$userAnsArray[0]=$t3[0]->q1;
		$userAnsArray[1]=$t3[0]->q2;
		$userAnsArray[2]=$t3[0]->q3;
		$questions=$this->user_model->fetchQuestions(1);
		$errorMap=array();
		for($i=0;$i < sizeof($questions); $i++){
			if($questions[$i]->ans==$userAnsArray[$i]){
				echo ($i+1)." is correct";
				echo "<br>";
			}else{
				$errorMap[$i]=$questions[$i]->sources;
				echo $questions[$i]->sources;
				echo "<br>";
			}
		}
		$participant=$this->user_model->getQuizAttempNumber("DECO3801",1);
		$quiz_result=$this->user_model->getQuizGrade("DECO3801",1,$_SESSION["id"]);
		$chance=round(($quiz_result[0]->grade/3)*0.8, 2);
		$allmsg=$this->user_model->totoalDiscussionQuestion("DECO3801");
		$res=$this->user_model->getStudentINFS($_SESSION["email"]);
		$unreadmsg=$res[0]->viewedMsg;
		$data["quiz_result"]=$chance;
		$data["participant"]=$participant;
		$data["errorMap"]=$errorMap;
		$data["unread"]=$allmsg-$unreadmsg;
		print_r($questions);
//		 $this->load->view('empty');
		$this->load->view('Student-Analytics',$data);
	}
}
