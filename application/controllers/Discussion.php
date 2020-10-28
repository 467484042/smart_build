<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Discussion extends CI_Controller {

	public function index()
	{
		if(isset($_POST["pContent"])){

		}
		$this->load->model('user_model');
		$this->user_model->readAll("DECO3801",$_SESSION["email"]);
		$questions=$this->user_model->getDiscussionQuestion("DECO3801");
		$question_comment_map=array();
		for($j=0;$j<sizeof($questions);$j++){
			$comment_array=array();
			$comments=$this->user_model->getComments($questions[$j]->id);
			for($i=0;$i<sizeof($comments);$i++){
				$cid=$comments[$i]->comment_id;
				$comment_array[]=$cid;
			}
			if(sizeof($comment_array)>0){
				$comments_content=$this->user_model->getCommentContent($comment_array);
				$comment_content_array=array();
				for($i=0;$i<sizeof($comments_content);$i++){
					$content=$comments_content[$i]->content;
					$comment_content_array[]=$content;
				}
				$question_comment_map[$questions[$j]->question."|".$questions[$j]->id]=$comment_content_array;
			}else{
				$question_comment_map[$questions[$j]->question."|".$questions[$j]->id]=array();
			}


		}
		$data["question_comment_map"]=$question_comment_map;
		$this->load->view('Student-Discussion',$data);
	}
	public function newQestion(){
		$content = array(
			'question' => $_POST["pTitle"]."|".$_POST["pContent"],
			'date' => date('Y-m-d'),
			'ccode' => 'DECO3801'
		);
		$this->load->model('user_model');
		$this->user_model->insertDiscussionQuestion($content);
		redirect(base_url().'smart_build/index.php/discussion',refresh);
	}

}
