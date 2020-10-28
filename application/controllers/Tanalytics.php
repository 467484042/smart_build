<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tanalytics extends CI_Controller {

	public function index()
	{
		$this->load->model('user_model');
		$quiz_array=array();
		$quiz_information=$this->user_model->quizINFS();
		for($i=0; $i<sizeof($quiz_information);$i++){
			$q_grade=$quiz_information[$i]->grade;
			$sinfs["name"]=$quiz_information[0]->studentname;
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
			$sinfs["qgrade"]=$quiz_information[$i]->grade;
			$quiz_array[]=$sinfs;
		}
		$data["quiz_array"]=$quiz_array;
//		print_r($data);
//		echo "<br>";
//		print_r($data["quiz_array"][0]["name"]) ;
//		$this->load->view('empty');

		$this->load->view('Teacher-Analytics',$data);
	}


}
