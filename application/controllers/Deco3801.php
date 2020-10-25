<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Deco3801 extends CI_Controller {

	public function index()
	{
		$this->load->view('Course3801-anouncement');
		//$this->load->view('Course3801-SmartED Analytics');
	}

	public function smartED()
	{
		$this->load->model('user_model');
		$grade=$this->user_model->averageGrade("DECO3801");
		$data["avrgGrade"]=$grade;
		$data["vt"]=$this->user_model->getVisitTime($_SESSION["id"]);
		// $this->load->view('empty',$data);
		$this->load->view('Course3801-SmartED Analytics',$data);
	}

	public function assessment()
	{
		$this->load->view('Course3801-Assessment');
	}
	public function courseHelp()
	{
		$this->load->view('Course3801-Course Help');
	}

	public function courseProfile()
	{
		$this->load->view('Course3801-Course Profile');
	}



	public function courseStaff()
	{
		$this->load->view('Course3801-Course Staff');
	}

	public function discussionBoard()
	{
		$this->load->view('Course3801-Discussion Board');
	}

	public function learningResource()
	{
		$this->load->view('Course3801-Learning Resource');
	}

	public function myGrades()
	{

		$this->load->view('Course3801-My Grades');
	}


	public function visit()
	{
		$this->load->model('user_model');
		$this->user_model->addVisitTime($_SESSION["id"]);
		header('Location: http://localhost/smart_build/deco3801/learningResource');
	}




	

	

	

}

