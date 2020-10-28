<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Quiz extends CI_Controller {

	public function index()
	{
		$this->load->model('user_model');
		$questions=$this->user_model->fetchQuestions(1);
		$data["question"]=$questions;
		print_r($questions[0]);
		echo "<br>";
		echo $questions[0]->qname;
		$input_data=$_POST[$questions[0]->qname];
		print_r($input_data);
//		$this->load->view('empty');
		$this->load->view('Student-Quiz',$data);
	}
	public function test2(){
		$this->load->model('user_model');
		$quiz_result=$this->user_model->getQuizGrade("DECO3801",1,$_SESSION["id"]);
		print_r($quiz_result[0]->grade);

		echo "<br>";
		$t2=$this->user_model->getAvgGrade("DECO3801",1);

		print_r($t2[0]->grade);
		$t3=$this->user_model->fetchUserAns(44752509,1);
		echo "<br>";
		echo "<br>";
		print_r($t3[0]);
		echo "<br>";
		echo "<br>";
		$userAnsArray[0]=$t3[0]->q1;
		$userAnsArray[1]=$t3[0]->q2;
		$userAnsArray[2]=$t3[0]->q2;
		print_r($userAnsArray);
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

		foreach($errorMap as $key => $item) {
			echo $item.' is begin with ('.$key.')';
		}
		$this->load->view('empty');
	}
	public function test4(){

		$content = array(
			'question' => $_POST["pTitle"]."|".$_POST["pContent"],
			'date' => date('Y-m-d'),
			'ccode' => 'DECO3801'
		);
		print_r($_POST);
		$this->load->model('user_model');
		$this->user_model->insertDiscussionQuestion($content);
		$this->load->view('empty');
	}

	public function test5(){
		$content = array(
			'content' => $_POST["textareaContent"],
			'date' => date('Y-m-d'),
		);
		$this->load->model('user_model');
		$cid=$this->user_model->insertcomment($content);
		$content2=array(
			'question_id' => $_POST["qid"],
			'comment_id' => $cid,
		);

		$this->user_model->insertHave($content2);
		$this->load->view('empty');
	}
	public function test6(){
		$this->load->model('user_model');
		$questions=$this->user_model->quizINFS();
		print_r($questions[0]);
		echo "<br>";
		echo $questions[0]->grade;
		$q_grade=$questions[0]->grade;
		$sinfs["name"]=$questions[0]->studentname;
		if(($q_grade/5)>=0.85){
			$sinfs["state"]="High Distinction";
		}elseif (($q_grade/5)<0.85 and ($q_grade/5)>=0.75){
			$sinfs["state"]="Distinction";
		}elseif (($q_grade/5)<0.75 and ($q_grade/5)>=0.65){
			$sinfs["state"]="Credit";
		}elseif (($q_grade/5)<0.65 and ($q_grade/5)>=0.50){
			$sinfs["state"]="Pass";
		}else{
			$sinfs["state"]="Fail";
		}
		$sinfs["time"]=rand(3, 15);
		$sinfs["qgrade"]=$questions[0]->grade;
		echo "<br>";
		print_r($sinfs);
		$this->load->view('empty');
	}

	public function test3(){
		$this->load->model('user_model');
		$questions=$this->user_model->getDiscussionQuestion("DECO3801");
		$comments=$this->user_model->getComments($questions[0]->id);

		$question_comment_map=array();
		for($j=0;$j<sizeof($questions);$j++){
			$comment_array=array();
			for($i=0;$i<sizeof($comments);$i++){
				$cid=$comments[$i]->comment_id;
				$comment_array[]=$cid;
			}
			$comments_content=$this->user_model->getCommentContent($comment_array);
			$comment_content_array=array();
			for($i=0;$i<sizeof($comments_content);$i++){
				$content=$comments_content[$i]->content;
				$comment_content_array[]=$content;
			}
			$question_comment_map[$questions[$j]->question]=$comment_content_array;
		}

//		print_r($question_comment_map);
//		echo "<br>";

//		print_r($comments_content);
		foreach($question_comment_map as $key => $item) {
			echo $key;
			echo "<br>";
			for($i=0;$i<sizeof($item);$i++){
				echo $item[$i];
				echo "<br>";
			}
			echo "<br>";
			echo "<br>";
		}
		$this->load->view('empty');
	}



	public function result(){
		$this->load->model('user_model');
		$questions=$this->user_model->fetchQuestions(1);
		$data["question"]=$questions;
		print_r($questions);
//		echo "<br>";
//		echo $questions[0]->qname;
//		echo "<br>";
		$input_data=$_POST["Question_1:"];
//		$t=array_values($_POST);
//		print_r($t);
		$ans=strtoupper($questions[0]->ans);
//		echo  "ans".$ans;
		$t=$questions[0]->qname;
		$text = str_replace(' ', '_', $t);

		$user_ans=array();

		foreach($_POST as $key => $item) {
			$str=substr($item,2);
			$user_ans[]=strtolower($str);
		}



		$total_score=0;
		for($i=0;$i < sizeof($questions); $i++){
			$correctAns="Q".($i+1).strtoupper($questions[$i]->ans);
			$t=$questions[$i]->qname;
			$text = str_replace(' ', '_', $t);
			$userAns=$_POST[$text];
			if($correctAns==$userAns){
				$total_score=$total_score+1;
			}
		}
		$content = array(
			'studentid' =>$_SESSION["id"],
			'week' => 1,
			'courseid' => "DECO3801",
			'q1' => $user_ans[0],
			'q2' => $user_ans[1],
			'q3' => $user_ans[2],
			'q4' => $user_ans[3],
			'q5' => $user_ans[4],
			'grade' => $total_score
		);
		$this->user_model->insertQuizResult($content);
		$data["user_ans"]=$user_ans;
		echo "total_score= ".$total_score;
//		for()
//		$this->load->view('empty');
		$this->load->view('Student-Ans',$data);
	}
}
